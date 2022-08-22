<?php

namespace PaynlRest;

use Doctrine\Common\Annotations\AnnotationReader;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use PaynlRest\Model\ServiceIdAwareInterface;
use PaynlRest\Request\RequestInterface;
use PaynlRest\Response\ResponseInterface;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class Requester
{

    private string $tokenCode;
    private string $token;
    private ?string $serviceId;

    private Client $httpClient;
    private SerializerInterface $serializer;

    public function __construct(string $tokenCode, string $token, ?string $serviceId = null, int $version = 1)
    {
        $this->tokenCode = $tokenCode;
        $this->token = $token;
        $this->serviceId = $serviceId;

        $this->httpClient = new Client([
            'base_uri' => 'https://rest.pay.nl/v' . $version . '/'
        ]);

        // Create serializer
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader(new AnnotationReader()));
        $extractor = new PropertyInfoExtractor([], [new PhpDocExtractor(), new ReflectionExtractor()]);
        $normalizers = [
            new ObjectNormalizer($classMetadataFactory, null, null, $extractor)
        ];
        $encoders = [new JsonEncoder()];

        $this->serializer = new Serializer($normalizers, $encoders);
    }

    private function getB64Auth(): string
    {
        return base64_encode($this->tokenCode . ':' . $this->token);
    }

    /**
     * @throws GuzzleException
     */
    public function request(RequestInterface $r): ResponseInterface
    {
        if ($r instanceof ServiceIdAwareInterface) {
            $r->setServiceId($this->serviceId);
        }

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => sprintf('Basic %s', $this->getB64Auth()),
        ];

        // Serialize data
        $body = $this->serializer->serialize($r->getData(), 'json');

        $request = new Request($r->getMethod(), $r->getUrlPath(), $headers, $body);
        $response = $this->httpClient->send($request);

        return $this->serializer->deserialize($response->getBody()->getContents(), $r->getResponseClass(), 'json');
    }

}