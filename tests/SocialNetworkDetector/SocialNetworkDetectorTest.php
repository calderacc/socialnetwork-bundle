<?php declare(strict_types=1);

namespace Caldera\SocialNetworkBundle\Tests\SocialNetworkDetector;

use Caldera\SocialNetworkBundle\Network;
use Caldera\SocialNetworkBundle\NetworkDetector\NetworkDetector;
use Caldera\SocialNetworkBundle\NetworkDetector\NetworkDetectorInterface;
use Caldera\SocialNetworkBundle\NetworkManager\NetworkManager;
use PHPUnit\Framework\TestCase;

class SocialNetworkDetectorTest extends TestCase
{
    protected function getNetworkDetector(): NetworkDetectorInterface
    {
        $networkManager = new NetworkManager();
        //$networkManager->addNetwork(new Network\FacebookEvent());
        //$networkManager->addNetwork(new Network\FacebookGroup());
        //$networkManager->addNetwork(new Network\FacebookPage());
        //$networkManager->addNetwork(new Network\FacebookProfile());
        $networkManager->addNetwork(new Network\DiscordChat());
        $networkManager->addNetwork(new Network\Flickr());
        $networkManager->addNetwork(new Network\Google());
        $networkManager->addNetwork(new Network\Homepage());
        $networkManager->addNetwork(new Network\Tumblr());
        $networkManager->addNetwork(new Network\TelegramChat());
        $networkManager->addNetwork(new Network\Twitter());
        $networkManager->addNetwork(new Network\InstagramPhoto());
        $networkManager->addNetwork(new Network\InstagramProfile());
        $networkManager->addNetwork(new Network\YoutubeChannel());
        $networkManager->addNetwork(new Network\YoutubePlaylist());
        $networkManager->addNetwork(new Network\YoutubeUser());
        $networkManager->addNetwork(new Network\YoutubeVideo());
        $networkManager->addNetwork(new Network\WhatsappChat());

        return new NetworkDetector($networkManager);
    }

    protected function detect(string $url): ?Network\NetworkInterface
    {
        $network = $this->getNetworkDetector()->detect($url);

        return $network;
    }

    public function testHomepage(): void
    {
        $network = $this->detect('https://criticalmass-hamburg.de/');

        $this->assertEquals('homepage', $network->getIdentifier());

        $network = $this->detect('http://criticalmass-hamburg.de/');

        $this->assertEquals('homepage', $network->getIdentifier());

        $network = $this->detect('https://criticalmass-hamburg.de');

        $this->assertEquals('homepage', $network->getIdentifier());

        $network = $this->detect('criticalmass-hamburg.de/');

        $this->assertNull($network);
    }

    public function testGoogle(): void
    {
        $network = $this->detect('https://plus.google.com/+Critical-Mass-Hamburg');

        $this->assertEquals('google', $network->getIdentifier());
    }

    public function testFlickr(): void
    {
        $network = $this->detect('https://www.flickr.com/photos/130278554@N08/');

        $this->assertEquals('flickr', $network->getIdentifier());
    }

    public function testTumblr(): void
    {
        $network = $this->detect('https://criticalmasshamburg.tumblr.com/');

        $this->assertEquals('tumblr', $network->getIdentifier());

        $network = $this->detect('http://criticalmasshamburg.tumblr.com/');

        $this->assertEquals('tumblr', $network->getIdentifier());

        $network = $this->detect('https://www.criticalmasshamburg.tumblr.com/');

        $this->assertEquals('tumblr', $network->getIdentifier());

        $network = $this->detect('http://www.criticalmasshamburg.tumblr.com/');

        $this->assertEquals('tumblr', $network->getIdentifier());
    }

    public function testTwitter(): void
    {
        $network = $this->detect('https://twitter.com/cm_hh');

        $this->assertEquals('twitter', $network->getIdentifier());

        $network = $this->detect('https://www.twitter.com/cm_hh');

        $this->assertEquals('twitter', $network->getIdentifier());

        $network = $this->detect('http://twitter.com/cm_hh');

        $this->assertEquals('twitter', $network->getIdentifier());

        $network = $this->detect('http://www.twitter.com/cm_hh');

        $this->assertEquals('twitter', $network->getIdentifier());

        $network = $this->detect('@cm_hh');

        $this->assertNull($network);
    }

    public function testYoutubeChannel(): void
    {
        $network = $this->detect('https://www.youtube.com/channel/UCq3Ci-h945sbEYXpVlw7rJg');

        $this->assertEquals('youtube_channel', $network->getIdentifier());

        $network = $this->detect('https://youtube.com/channel/UCq3Ci-h945sbEYXpVlw7rJg');

        $this->assertEquals('youtube_channel', $network->getIdentifier());

        $network = $this->detect('http://www.youtube.com/channel/UCq3Ci-h945sbEYXpVlw7rJg');

        $this->assertEquals('youtube_channel', $network->getIdentifier());

        $network = $this->detect('http://youtube.com/channel/UCq3Ci-h945sbEYXpVlw7rJg');

        $this->assertEquals('youtube_channel', $network->getIdentifier());
    }

    public function testYoutubePlaylist(): void
    {
        $network = $this->detect('https://www.youtube.com/playlist?list=abcdefg');

        $this->assertEquals('youtube_playlist', $network->getIdentifier());

        $network = $this->detect('https://youtube.com/playlist?list=abcdefg');

        $this->assertEquals('youtube_playlist', $network->getIdentifier());

        $network = $this->detect('http://www.youtube.com/playlist?list=abcdefg');

        $this->assertEquals('youtube_playlist', $network->getIdentifier());

        $network = $this->detect('http://youtube.com/playlist?list=abcdefg');

        $this->assertEquals('youtube_playlist', $network->getIdentifier());
    }

    public function testYoutubeUser(): void
    {
        $network = $this->detect('https://www.youtube.com/user/TomorrowlandChannel/');

        $this->assertEquals('youtube_user', $network->getIdentifier());

        $network = $this->detect('http://www.youtube.com/user/TomorrowlandChannel/');

        $this->assertEquals('youtube_user', $network->getIdentifier());

        $network = $this->detect('https://youtube.com/user/TomorrowlandChannel/');

        $this->assertEquals('youtube_user', $network->getIdentifier());

        $network = $this->detect('http://youtube.com/user/TomorrowlandChannel/');

        $this->assertEquals('youtube_user', $network->getIdentifier());

        $network = $this->detect('https://www.youtube.com/user/TomorrowlandChannel');

        $this->assertEquals('youtube_user', $network->getIdentifier());

        $network = $this->detect('http://www.youtube.com/user/TomorrowlandChannel');

        $this->assertEquals('youtube_user', $network->getIdentifier());

        $network = $this->detect('https://youtube.com/user/TomorrowlandChannel');

        $this->assertEquals('youtube_user', $network->getIdentifier());

        $network = $this->detect('http://youtube.com/user/TomorrowlandChannel');

        $this->assertEquals('youtube_user', $network->getIdentifier());
    }

    public function testYoutubeVideo(): void
    {
        $network = $this->detect('https://www.youtube.com/watch?v=MglnNn_rB3I');

        $this->assertEquals('youtube_video', $network->getIdentifier());
    }

    public function testInstagramPhoto(): void
    {
        $network = $this->detect('https://www.instagram.com/p/BsRoT-eA23Q/');

        $this->assertEquals('instagram_photo', $network->getIdentifier());

        $network = $this->detect('http://www.instagram.com/p/BsRoT-eA23Q/');

        $this->assertEquals('instagram_photo', $network->getIdentifier());

        $network = $this->detect('https://instagram.com/p/BsRoT-eA23Q/');

        $this->assertEquals('instagram_photo', $network->getIdentifier());

        $network = $this->detect('http://instagram.com/p/BsRoT-eA23Q/');

        $this->assertEquals('instagram_photo', $network->getIdentifier());

        $network = $this->detect('https://www.instagram.com/p/BsRoT-eA23Q');

        $this->assertEquals('instagram_photo', $network->getIdentifier());

        $network = $this->detect('http://www.instagram.com/p/BsRoT-eA23Q');

        $this->assertEquals('instagram_photo', $network->getIdentifier());

        $network = $this->detect('https://instagram.com/p/BsRoT-eA23Q');

        $this->assertEquals('instagram_photo', $network->getIdentifier());

        $network = $this->detect('http://instagram.com/p/BsRoT-eA23Q');

        $this->assertEquals('instagram_photo', $network->getIdentifier());
    }

    public function testInstagramProfile(): void
    {
        $network = $this->detect('https://www.instagram.com/criticalmasshamburg/');

        $this->assertEquals('instagram_profile', $network->getIdentifier());

        $network = $this->detect('http://www.instagram.com/criticalmasshamburg/');

        $this->assertEquals('instagram_profile', $network->getIdentifier());

        $network = $this->detect('https://instagram.com/criticalmasshamburg/');

        $this->assertEquals('instagram_profile', $network->getIdentifier());

        $network = $this->detect('http://www.instagram.com/criticalmasshamburg/');

        $this->assertEquals('instagram_profile', $network->getIdentifier());

        $network = $this->detect('https://www.instagram.com/criticalmasshamburg');

        $this->assertEquals('instagram_profile', $network->getIdentifier());

        $network = $this->detect('http://www.instagram.com/criticalmasshamburg');

        $this->assertEquals('instagram_profile', $network->getIdentifier());

        $network = $this->detect('https://instagram.com/criticalmasshamburg');

        $this->assertEquals('instagram_profile', $network->getIdentifier());

        $network = $this->detect('http://www.instagram.com/criticalmasshamburg');

        $this->assertEquals('instagram_profile', $network->getIdentifier());
    }

    public function testWhatsAppChat(): void
    {
        $network = $this->detect('https://chat.whatsapp.com/WEgc3436ew');

        $this->assertEquals('whatsapp_chat', $network->getIdentifier());

        $network = $this->detect('http://chat.whatsapp.com/WEgc3436ew');

        $this->assertEquals('whatsapp_chat', $network->getIdentifier());
    }

    public function testTelegramChat(): void
    {
        $network = $this->detect('https://t.me/WEgc3436ew');

        $this->assertEquals('telegram_chat', $network->getIdentifier());

        $network = $this->detect('http://t.me/WEgc3436ew');

        $this->assertEquals('telegram_chat', $network->getIdentifier());
    }

    public function testDiscordChat(): void
    {
        $network = $this->detect('https://discordapp.com/invite/WEgc3436ew');

        $this->assertEquals('discord_chat', $network->getIdentifier());

        $network = $this->detect('https://discord.gg/WEgc3436ew');

        $this->assertEquals('discord_chat', $network->getIdentifier());
    }
}
