<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/errors/asset_set_asset_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Errors;

class AssetSetAssetError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
;google/ads/googleads/v18/errors/asset_set_asset_error.protogoogle.ads.googleads.v18.errors"�
AssetSetAssetErrorEnum"�
AssetSetAssetError
UNSPECIFIED 
UNKNOWN
INVALID_ASSET_TYPE
INVALID_ASSET_SET_TYPE
DUPLICATE_EXTERNAL_KEY!
PARENT_LINKAGE_DOES_NOT_EXISTB�
#com.google.ads.googleads.v18.errorsBAssetSetAssetErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/errors;errors�GAA�Google.Ads.GoogleAds.V18.Errors�Google\\Ads\\GoogleAds\\V18\\Errors�#Google::Ads::GoogleAds::V18::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

