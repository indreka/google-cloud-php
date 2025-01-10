<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/datasources/v1beta/datasources.proto

namespace GPBMetadata\Google\Shopping\Merchant\Datasources\V1Beta;

class Datasources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Shopping\Merchant\Datasources\V1Beta\Datasourcetypes::initOnce();
        \GPBMetadata\Google\Shopping\Merchant\Datasources\V1Beta\Fileinputs::initOnce();
        $pool->internalAddGeneratedFile(
            '
�!
=google/shopping/merchant/datasources/v1beta/datasources.proto+google.shopping.merchant.datasources.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protoAgoogle/shopping/merchant/datasources/v1beta/datasourcetypes.proto<google/shopping/merchant/datasources/v1beta/fileinputs.proto"�	

DataSourcel
primary_product_data_source (2E.google.shopping.merchant.datasources.v1beta.PrimaryProductDataSourceH v
 supplemental_product_data_source (2J.google.shopping.merchant.datasources.v1beta.SupplementalProductDataSourceH l
local_inventory_data_source (2E.google.shopping.merchant.datasources.v1beta.LocalInventoryDataSourceH r
regional_inventory_data_source (2H.google.shopping.merchant.datasources.v1beta.RegionalInventoryDataSourceH a
promotion_data_source (2@.google.shopping.merchant.datasources.v1beta.PromotionDataSourceH j
product_review_data_source	 (2D.google.shopping.merchant.datasources.v1beta.ProductReviewDataSourceH l
merchant_review_data_source (2E.google.shopping.merchant.datasources.v1beta.MerchantReviewDataSourceH 
name (	B�A
data_source_id (B�A
display_name (	B�AQ
input
 (2=.google.shopping.merchant.datasources.v1beta.DataSource.InputB�AO

file_input (26.google.shopping.merchant.datasources.v1beta.FileInputB�A"G
Input
INPUT_UNSPECIFIED 
API
FILE
UI
AUTOFEED:p�Am
%merchantapi.googleapis.com/DataSource+accounts/{account}/dataSources/{datasource}*dataSources2
dataSourceB
Type"S
GetDataSourceRequest;
name (	B-�A�A\'
%merchantapi.googleapis.com/DataSource"�
ListDataSourcesRequest=
parent (	B-�A�A\'%merchantapi.googleapis.com/DataSource
	page_size (B�A

page_token (	B�A"�
ListDataSourcesResponseM
data_sources (27.google.shopping.merchant.datasources.v1beta.DataSource
next_page_token (	"�
CreateDataSourceRequest=
parent (	B-�A�A\'%merchantapi.googleapis.com/DataSourceQ
data_source (27.google.shopping.merchant.datasources.v1beta.DataSourceB�A"�
UpdateDataSourceRequestQ
data_source (27.google.shopping.merchant.datasources.v1beta.DataSourceB�A4
update_mask (2.google.protobuf.FieldMaskB�A"U
FetchDataSourceRequest;
name (	B-�A�A\'
%merchantapi.googleapis.com/DataSource"V
DeleteDataSourceRequest;
name (	B-�A�A\'
%merchantapi.googleapis.com/DataSource2�

DataSourcesService�
GetDataSourceA.google.shopping.merchant.datasources.v1beta.GetDataSourceRequest7.google.shopping.merchant.datasources.v1beta.DataSource"B�Aname���53/datasources/v1beta/{name=accounts/*/dataSources/*}�
ListDataSourcesC.google.shopping.merchant.datasources.v1beta.ListDataSourcesRequestD.google.shopping.merchant.datasources.v1beta.ListDataSourcesResponse"D�Aparent���53/datasources/v1beta/{parent=accounts/*}/dataSources�
CreateDataSourceD.google.shopping.merchant.datasources.v1beta.CreateDataSourceRequest7.google.shopping.merchant.datasources.v1beta.DataSource"]�Aparent,data_source���B"3/datasources/v1beta/{parent=accounts/*}/dataSources:data_source�
UpdateDataSourceD.google.shopping.merchant.datasources.v1beta.UpdateDataSourceRequest7.google.shopping.merchant.datasources.v1beta.DataSource"n�Adata_source,update_mask���N2?/datasources/v1beta/{data_source.name=accounts/*/dataSources/*}:data_source�
DeleteDataSourceD.google.shopping.merchant.datasources.v1beta.DeleteDataSourceRequest.google.protobuf.Empty"B�Aname���5*3/datasources/v1beta/{name=accounts/*/dataSources/*}�
FetchDataSourceC.google.shopping.merchant.datasources.v1beta.FetchDataSourceRequest.google.protobuf.Empty"D���>"9/datasources/v1beta/{name=accounts/*/dataSources/*}:fetch:*G�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentB�
/com.google.shopping.merchant.datasources.v1betaBDataSourcesProtoPZWcloud.google.com/go/shopping/merchant/datasources/apiv1beta/datasourcespb;datasourcespb�+Google.Shopping.Merchant.DataSources.V1Beta�+Google\\Shopping\\Merchant\\DataSources\\V1beta�/Google::Shopping::Merchant::DataSources::V1beta�A8
"merchantapi.googleapis.com/Accountaccounts/{account}�AT
%merchantapi.googleapis.com/Datasource+accounts/{account}/dataSources/{datasource}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

