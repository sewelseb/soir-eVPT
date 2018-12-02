<?php
    require_once(__DIR__ . '/vendor/autoload.php');

    // Configure API key authorization: api-key
    $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
    // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
    // $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


    $apiInstance = new SendinBlue\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $config
    );

    try {
        $result = $apiInstance->getAccount();
        var_dump($result);
    } catch (Exception $e) {
        echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
    }


    $apiInstance = new SendinBlue\Client\Api\SMTPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
        new GuzzleHttp\Client(),
        $config
    );

    $sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();

    $sender = new \SendinBlue\Client\Model\SendSmtpEmailSender();
    $sender->setEmail('soiree@vpt.be ');
    $sender->setName('Soirée VPT ');

    $destination =  new \SendinBlue\Client\Model\SendSmtpEmailTo();
    $destination->setEmail('sewelseb@hotmail.com');

    $sendSmtpEmail->setTo([$destination]);
    $sendSmtpEmail->setSender($sender);
    $sendSmtpEmail->setTextContent('test email');
    $sendSmtpEmail->setSubject('test email');



    try {
        $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
    }

?>