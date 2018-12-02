<?php
    require_once(__DIR__ . '/../../vendor/autoload.php');

    class EmailClient {

        private $myAPIKey = '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';
        private $config;
        private $apiInstance;


        public function __construct()
        {
            // Configure API key authorization: api-key
            $this->config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', $this->myAPIKey);
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

            $this->apiInstance = new SendinBlue\Client\Api\SMTPApi(
                // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
                // This is optional, `GuzzleHttp\Client` will be used as default.
                new GuzzleHttp\Client(),
                $this->config
            );

        }

        public function sendMail(string $destinationEmail, string $subject, string $text) {
            $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();

            $sendSmtpEmail->setTo([$this->createDestination($destinationEmail)]);
            $sendSmtpEmail->setSender($this->createSender());
            $sendSmtpEmail->setTextContent($text);
            $sendSmtpEmail->setSubject($subject);

            try {
                $result = $this->apiInstance->sendTransacEmail($sendSmtpEmail);
                return $result;
            } catch (Exception $e) {
                echo 'Exception when calling AccountApi->sendMail: ', $e->getMessage(), PHP_EOL;
                return null;
            }
        }

        private function createSender() {
            $sender = new \SendinBlue\Client\Model\SendSmtpEmailSender();
            $sender->setEmail('soiree@vpt.be ');
            $sender->setName('Soirée VPT ');

            return $sender;
        }

        private function createDestination(string $email) {
            $destination =  new \SendinBlue\Client\Model\SendSmtpEmailTo();
            $destination->setEmail($email);

            return $destination;
        }
    }