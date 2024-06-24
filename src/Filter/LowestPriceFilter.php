<?php

namespace App\Filter;

use App\DTO\PromotionEnquiryInterface;
use App\Entity\Promotion;

class LowestPriceFilter implements PromotionsFilterInterface
{

    public function apply(PromotionEnquiryInterface $enquiry, Promotion ...$promotion): PromotionEnquiryInterface
    {
        $enquiry->setDiscountedPrice("20");
        $enquiry->setPrice("30");
        $enquiry->setPromotionId(6);
        $enquiry->setPromotionName("10 euros discount");

        return $enquiry;
    }
}