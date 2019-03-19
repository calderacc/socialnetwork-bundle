<?php

namespace Caldera\SocialNetworkBundle\NetworkFeedFetcher;

use App\Entity\SocialNetworkProfile;

interface NetworkFeedFetcherInterface
{
    public function fetch(SocialNetworkProfile $socialNetworkProfile): NetworkFeedFetcherInterface;
}
