<?php

final class MetricsDictionary
{
    const DATE_DAILY = 'date_daily';

    const ROWS_COUNT = 'rows_count';

    const DATE = 'date';

    const DATE_HOURLY = 'date_hourly';

    const DATE_MONTHLY = 'date_monthly';

    const SOURCE_ID = 'source_id';

    const PROJECT_CLICKS = '$clicks';

    const PROJECT_LEADS = '$leads';

    const PROJECT_REQUESTS = '$requests';

    const PROJECT_NOT_VALID_CLICKS = '$not_valid_clicks';

    const PROJECT_PAYOUT = '$payout';

    const PROJECT_VIEWS = '$views';

    const PROJECT_REVENUE = '$revenue';

    const PROJECT_SHAVED_LEADS = '$shaved_leads';

    const PROJECT_SHAVED_PAYOUT = '$shaved_payout';

    const PROJECT_SHAVED_REVENUE = '$shaved_revenue';

    const PROJECT_SHAVED_USD_REVENUE = '$shaved_usd_revenue';

    const PROJECT_SHAVED_EUR_REVENUE = '$shaved_eur_revenue';

    const PROJECT_SHAVED_RUB_REVENUE = '$shaved_rub_revenue';

    const PROJECT_SHAVED_USD_REVENUE_EQ = '$shaved_usd_equivalence_revenue';

    const DEFAULT_TIME_ZONE = 'UTC';

    const METRIC_LS_LEADS = 'ls_leads';     // veiled shaved_leads

    const METRIC_LS_REVENUE = 'ls_revenue';   // veiled shaved_revenue

    const METRIC_LS_USD_REVENUE = 'ls_revenue_usd';   // veiled shaved_usd_revenue

    const METRIC_LS_EUR_REVENUE = 'ls_revenue_eur';   // veiled shaved_eur_revenue

    const METRIC_LS_RUB_REVENUE = 'ls_revenue_rub';   // veiled shaved_rub_revenue

    const METRIC_LS_USD_REVENUE_EQ = 'ls_revenue_usd_equivalence';   // alias to shaved_revenue

    const METRIC_LS_PAYOUT = 'ls_payout';    // veiled shaved_payout

    const METRIC_REVENUE = 'revenue';

    const METRIC_COUNTRY = 'country';

    const METRIC_APP_CATEGORY = 'app_category';

    const METRIC_APP_ID = 'app_id';

    const METRIC_APP_NAME = 'app_name';

    const METRIC_APP_STORE = 'app_store';

    const METRIC_APP_CATEGORIES = 'app_categories';
    const METRIC_LEADS = 'leads';

    const METRIC_PAYOUT = 'payout';
    const METRIC_PROFIT = 'profit';
    const METRIC_VALID_CLICKS = 'valid_clicks';

    const METRIC_VALID_IMPRESSIONS = 'valid_impressions';

    const METRIC_IMPRESSIONS = 'impressions';

    const METRIC_NOT_VALID_IMPRESSIONS = 'not_valid_impressions';
    const METRIC_CLICKS = 'clicks';
    const METRIC_SPEND = 'spend';
    const METRIC_SHAVED_REVENUE = 'shaved_revenue';

    const METRIC_SHAVED_USD_REVENUE = 'shaved_usd_revenue';

    const METRIC_SHAVED_EUR_REVENUE = 'shaved_eur_revenue';

    const METRIC_SHAVED_RUB_REVENUE = 'shaved_rub_revenue';

    const METRIC_CREATIVE_ID = 'creative_id';

    const METRIC_WIDTH = 'width';

    const METRIC_HEIGHT = 'height';
    const METRIC_CNV = 'cnv';

    const METRIC_NOT_VALID_CLICKS = 'not_valid_clicks';
    const METRIC_SUBSITE_ID = 'subsite_id';

    const METRIC_SHAVED_LEADS = 'shaved_leads';

    const METRIC_SHAVED_PAYOUT = 'shaved_payout';

    const METRIC_CREATIVE_PATH = 'creative_path';

    const METRIC_CREATIVE_NAME = 'creative_name';

    const METRIC_CREATIVE_UPDATED = 'creative_updated';

    const METRIC_CREATIVE_CREATED = 'creative_created';

    const METRIC_CREATIVE_SIZE = 'creative_size';

    const METRIC_CREATIVE_FILE_TYPE = 'creative_file_type';

    const METRIC_CREATIVE_LANGUAGE = 'creative_language';

    const METRIC_CREATIVE_STATUS = 'creative_status';

    const METRIC_CREATIVE_UA_LANGUAGE = 'user_agent_language';

    const METRIC_FRAUD_CLICKS = 'fraud_clicks';

    const METRIC_FRAUD = 'fraud';

    const METRIC_PUBLISHER_ID = 'publisher_id';

    const METRIC_PUBLISHER_NAME = 'publisher_name';

    const METRIC_PUBLISHER_TYPE = 'publisher_type';

    const METRIC_PUBLISHER_SOURCE = 'publisher_source';

    const METRIC_PUBLISHER_CHANNEL = 'publisher_channel';

    const METRIC_PUBLISHER_CREATED = 'publisher_created';

    const METRIC_PUBLISHER_SCORE = 'publisher_score';

    const METRIC_PUBLISHER_BALANCE = 'publisher_balance';

    const METRIC_PUBLISHER_PLATFORM = 'publisher_platform';

    const METRIC_PUBLISHER_COUNTRY = 'publisher_country';

    const METRIC_PUBLISHER_COUNTRY_NAME = 'publisher_country_name';

    const METRIC_PUBLISHER_TAGS = 'publisher_tags';

    const METRIC_PUBLISHER_EMAIL = 'publisher_email';

    const METRIC_SITE_ID = 'site_id';

    const METRIC_SITE_NAME = 'site_name';

    const METRIC_SITE_PAYMENT_MODEL_ID = 'site_payment_model_id';

    const METRIC_SITE_PAYMENT_MODEL_NAME = 'site_payment_model_name';

    const METRIC_TRAFFIC_SCORE = 'traffic_score';

    const METRIC_CRAWLER_STATUS = 'crawler_status';

    const METRIC_ADVERTISER_ID = 'advertiser_id';

    const METRIC_ADVERTISER_NAME = 'advertiser_name';

    const METRIC_ADVERTISER_COUNTRY = 'advertiser_country';

    const METRIC_ADVERTISER_COUNTRY_NAME = 'advertiser_country_name';

    const METRIC_ADVERTISER_STATUS = 'advertiser_status';

    const METRIC_ADVERTISER_SOURCE = 'source';

    const METRIC_ADVERTISER_CHANNEL = 'channel';

    const METRIC_ADVERTISER_TRAFFIC_SOURCES = 'advertiser_traffic_sources';

    const METRIC_AD_ID = 'ad_id';

    const METRIC_AD_NAME = 'ad_name';

    const METRIC_AD_ACTION = 'action';

    const METRIC_ADVERTISER_COMPANY = 'company_name';

    const METRIC_AD_TRANSLATIONS = 'translations';

    const METRIC_AD_ICON = 'icon';

    const METRIC_AD_APPLICATION_ID = 'application_id';

    const METRIC_AD_APPLICATION = 'application';

    const METRIC_AD_LEAD_TYPE = 'lead_type';

    const METRIC_AD_CNV_MIN = 'cnv_min';

    const METRIC_AD_CNV_LEADS = 'cnv_leads';

    const METRIC_AD_CNV_CLICKS = 'cnv_clicks';

    const METRIC_AD_ADROUT = 'adroute';

    const METRIC_AD_TYPE = 'ad_type';

    const METRIC_AD_OS_TARGETING = 'offer_os_targeting';

    const METRIC_AD_GEO_TARGETING = 'offer_geo_targeting';

    const METRIC_AD_STATUS = 'offer_status';

    const METRIC_AD_START_DATE = 'start_date';

    const METRIC_AD_END_DATE = 'end_date';

    const METRIC_AD_DESCRIPTION = 'description';

    const METRIC_AD_INSTRUCTION = 'instruction';

    const METRIC_AD_TITLE = 'title';

    const METRIC_AD_LANDING_URL = 'landing_url';

    const METRIC_AD_TRACKING_URL = 'tracking_url';

    const METRIC_AD_PRICE = 'price';

    const METRIC_AD_DAY_LIMIT = 'daily_limit';

    const METRIC_AD_ACTIVE = 'active';

    const METRIC_AD_CLICKS_OVERALL = 'clicks_overall';

    const METRIC_AD_LEADS_OVERALL = 'leads_overall';

    const METRIC_AD_HIDDEN = 'hidden';

    const METRIC_AD_NEEDS_APPROVAL = 'needs_approval';

    const METRIC_AD_MOBILE = 'mobile';

    const METRIC_AD_TAGS = 'ad_tags';

    const METRIC_AD_CREATED = 'ad_created';

    const METRIC_AD_UPDATED = 'ad_updated';

    const METRIC_AD_DEAD_COUNTRIES = 'dead_countries';

    const METRIC_ADVERTISER_CREATED = 'advertiser_created';

    const METRIC_ADVERTISER_TAGS = 'advertiser_tags';

    const METRIC_AD_CURRENCY_ID = 'currency_id';

    const METRIC_AD_TRAFFIC_TYPE = 'traffic_type';

    const METRIC_AD_REV_SHARE = 'rev_share';

    const METRIC_AD_PLATFORM = 'ad_platform';

    const METRIC_AD_TRAFFIC_SOURCE = 'ad_traffic_sources';

    const METRIC_AD_CAPS = 'caps';

    const METRIC_AD_RESERVED_CAPS = 'reserved_caps';

    const METRIC_TRAFFIC_SOURCE = 'traffic_source';

    const METRIC_CABINET_ID = 'cabinet_id';

    const METRIC_CABINET_NAME = 'cabinet_name';

    const METRIC_MANAGER_ID = 'manager_id';

    const METRIC_MANAGER_NAME = 'manager_name';

    const METRIC_MANAGER_BIZDEV_NAME = 'bizdev_name';

    const METRIC_MANAGER_BIZDEV_ID = 'bizdev_id';

    const METRIC_LEAD_TYPE = 'lead_type';

    const METRIC_OFFER_STATUS = 'offer_status';

    const METRIC_DEVICE = 'device';

    const METRIC_COMPANY_NAME = 'company_name';

    const METRIC_VIEWS = 'views';

    const METRIC_REQUESTS = 'requests';

    const METRIC_WRONG_GEO_CLICKS = 'wrong_geo_clicks';

    const METRIC_WRONG_AGE_CLICKS = 'wrong_age_clicks';

    const METRIC_WRONG_MAN_CLICKS = 'wrong_manufacturer_clicks';

    const METRIC_WRONG_MODEL_CLICKS = 'wrong_model_clicks';

    const METRIC_WRONG_OS_CLICKS = 'wrong_os_clicks';

    const METRIC_WRONG_TYPE_CLICKS = 'wrong_device_type_clicks';

    const METRIC_WRONG_SEX_CLICKS = 'wrong_sex_clicks';

    const METRIC_WRONG_VERSION_CLICKS = 'wrong_version_clicks';

    const METRIC_CTR = 'ctr';

    const METRIC_OS_VERSION = 'os_version';
    const METRIC_OS = 'os';
    const METRIC_MODEL = 'model';
    const METRIC_MANUFACTURER = 'manufacturer';
    const METRIC_DEVICE_TYPE = 'device_type';

    const METRIC_BROKEN_BINDBINGS_CLICKS = 'broken_bindbing_clicks';

    const METRIC_BROKEN_BINDINGS_CLICKS = 'broken_bindbing_clicks';

    const METRIC_NOT_ACTIVE_OFFER_CLICKS = 'not_active_offer_clicks';

    const METRIC_NOT_ACTIVE_SITE_CLICKS = 'not_active_site_clicks';

    const METRIC_NOT_ACTIVE_USER_CLICKS = 'not_active_user_clicks';

    const METRIC_UNKNOWN_CLICK = 'unknown_click';

    const METRIC_BLACKLIST = 'blacklist';

    const METRIC_CR = 'cr';

    const METRIC_NOT_UNIQUE_USER_CLICKS = 'not_unique_user_clicks';

    const METRIC_WRONG_LEADS = 'wrong_leads';

    const METRIC_WRONG_LEADS_IP = 'wrong_leads_ip';

    const METRIC_WRONG_LEADS_HASH = 'wrong_leads_hash';

    const METRIC_REVENUE_USD = 'revenue_usd';

    const METRIC_REVENUE_EUR = 'revenue_eur';

    const METRIC_REVENUE_RUB = 'revenue_rub';

    const METRIC_REVENUE_USD_EQ = 'revenue_usd_equivalence'; // alias to revenue

    const METRIC_PAYOUT_USD = 'payout_usd';

    const METRIC_PAYOUT_RUB = 'payout_rub';

    const METRIC_PAYOUT_EUR = 'payout_eur';

    const METRIC_PAYOUT_USD_EQ = 'payout_usd_equivalence'; // alias to payout

    const PROJECT_REVENUE_USD = '$revenue_usd';

    const PROJECT_REVENUE_EUR = '$revenue_eur';

    const PROJECT_REVENUE_RUB = '$revenue_rub';

    const PROJECT_PAYOUT_USD = '$payout_usd';

    const PROJECT_PAYOUT_EUR = '$payout_eur';

    const PROJECT_PAYOUT_RUB = '$payout_rub';

    const METRIC_CHARGEBACK_REVENUE_USD = 'chargeback_revenue_usd';

    const METRIC_CHARGEBACK_REVENUE_EUR = 'chargeback_revenue_eur';

    const METRIC_CHARGEBACK_REVENUE_RUB = 'chargeback_revenue_rub';

    const METRIC_CHARGEBACK_PAYOUT_USD = 'chargeback_payout_usd';

    const METRIC_CHARGEBACK_PAYOUT_EUR = 'chargeback_payout_eur';

    const METRIC_CHARGEBACK_PAYOUT_RUB = 'chargeback_payout_rub';

    const PROJECT_CHARGEBACK_REVENUE_USD = '$chargeback_revenue_usd';

    const PROJECT_CHARGEBACK_REVENUE_EUR = '$chargeback_revenue_eur';

    const PROJECT_CHARGEBACK_REVENUE_RUB = '$chargeback_revenue_rub';

    const PROJECT_CHARGEBACK_PAYOUT_USD = '$chargeback_payout_usd';

    const PROJECT_CHARGEBACK_PAYOUT_EUR = '$chargeback_payout_eur';

    const PROJECT_CHARGEBACK_PAYOUT_RUB = '$chargeback_payout_rub';

    const METRIC_USER_BILL = 'user_bill';

    const METRIC_CHARGEBACK_REVENUE_USD_EQ = 'chargeback_revenue_usd_equivalent';

    const PROJECT_CHARGEBACK_REVENUE_USD_EQ = '$chargeback_revenue_usd_equivalent';

    const METRIC_CHARGEBACK_PAYOUT_USD_EQ = 'chargeback_payout_usd_equivalent';

    const PROJECT_CHARGEBACK_PAYOUT_USD_EQ = '$chargeback_payout_usd_equivalent';

    const METRIC_EMPTY_REQUESTS_OVERALL = 'empty_requests_overall';

    const PROJECT_EMPTY_REQUESTS_OVERALL = '$empty_requests_overall';

    const METRIC_EMPTY_REQUESTS = 'empty';

    const METRIC_REQUESTS_NO_OFFERS = 'no_offers';

    const METRIC_REQUESTS_NO_CREATIVES = 'no_creatives';

    const METRIC_RESPONSE_FILLRATE_OVERALL = 'fillrate_overall';

    const METRIC_RESPONSE_FILLRATE_1 = 'fillrate_1';

    const METRIC_RESPONSE_FILLRATE_2 = 'fillrate_2';

    const METRIC_RESPONSE_FILLRATE_3 = 'fillrate_3';

    const METRIC_RESPONSE_FILLRATE_4 = 'fillrate_4';

    const METRIC_RESPONSE_FILLRATE_5 = 'fillrate_5';

    const METRIC_RESPONSE_FILLING_1 = 'response_filling_1';

    const METRIC_RESPONSE_FILLING_2 = 'response_filling_2';

    const METRIC_RESPONSE_FILLING_3 = 'response_filling_3';

    const METRIC_RESPONSE_FILLING_4 = 'response_filling_4';

    const METRIC_RESPONSE_FILLING_5 = 'response_filling_5';

    const PROJECT_RESPONSE_FILLING_1 = '$response_filling_1';

    const PROJECT_RESPONSE_FILLING_2 = '$response_filling_2';

    const PROJECT_RESPONSE_FILLING_3 = '$response_filling_3';

    const PROJECT_RESPONSE_FILLING_4 = '$response_filling_4';

    const PROJECT_RESPONSE_FILLING_5 = '$response_filling_5';

    const METRIC_RESPONSES = 'responses';

    const METRIC_PLACEMENT = 'placement';

    const METRIC_PLACEMENT_ID = 'placement_id';

    const METRIC_PLACEMENT_NAME = 'placement_name';

    const METRIC_SOURCE_MANGER = 'source_manager';

    const METRIC_RESOURCE = 'resource';

    const METRIC_RESOURCE_ID = 'resource_id';

    const METRIC_RESOURCE_NAME = 'resource_name';

    const METRIC_PLACEMENT_TYPE = 'placement_type';

    const METRIC_PLACEMENT_CATEGORY = 'placement_category';

    const METRIC_PLACEMENT_ADUNIT = 'placement_ad_unit';

    const METRIC_SITE_STATUS = 'site_status';

    const METRIC_AD_UNIT = 'ad_unit';

    const METRIC_SITE_TAGS = 'site_tags';

    const METRIC_OFFER_QUANTITY = 'offer_quantity';

    const METRIC_OFFER_RANGE_TYPE = 'offer_range_type';

    const METRIC_HAS_CREATIVE = 'has_creative';

    const METRIC_HAS_ICON = 'has_icon';

    const METRIC_HAS_BUNDLE_ID = 'has_bundle_id';

    const METRIC_HAS_APP_NAME = 'has_application_name';

    const METRIC_HAS_APP_DESCRIPTION = 'has_application_description';

    const METRIC_PLACEMENT_RATING = 'placement_rating';

    const METRIC_INCLUDE_DUPLICATED = 'include_duplicated_campaign';

    const PROJECT_IMPRESSIONS = '$impressions';

    const PROJECT_NOT_VALID_IMPRESSIONS = '$not_valid_impressions';

    const METRIC_WRONG_GEO_IMPRESSIONS = 'wrong_geo_impressions';

    const METRIC_WRONG_AGE_IMPRESSIONS = 'wrong_age_impressions';

    const METRIC_WRONG_MAN_IMPRESSIONS = 'wrong_manufacturer_impressions';

    const METRIC_WRONG_MODEL_IMPRESSIONS = 'wrong_model_impressions';

    const METRIC_WRONG_OS_IMPRESSIONS = 'wrong_os_impressions';

    const METRIC_WRONG_TYPE_IMPRESSIONS = 'wrong_device_type_impressions';

    const METRIC_WRONG_SEX_IMPRESSIONS = 'wrong_sex_impressions';

    const METRIC_WRONG_VERSION_IMPRESSIONS = 'wrong_version_impressions';

    const METRIC_WRONG_TRAFFIC_SOURCE_IMPRESSIONS = 'wrong_traffic_source_impressions';

    const METRIC_WRONG_TRAFFIC_SCORE_IMPRESSIONS = 'wrong_traffic_score_impressions';

    const METRIC_BROKEN_BINDINGS_IMPRESSIONS = 'broken_binding_impressions';

    const METRIC_NOT_ACTIVE_OFFER_IMPRESSIONS = 'not_active_offer_impressions';

    const METRIC_NOT_ACTIVE_SITE_IMPRESSIONS = 'not_active_site_impressions';

    const METRIC_NOT_ACTIVE_USER_IMPRESSIONS = 'not_active_user_impressions';

    const METRIC_UNKNOWN_IMPRESSION = 'unknown_impression';

    const METRIC_NOT_UNIQUE_USER_IMPRESSIONS = 'not_unique_user_impressions';

    const METRIC_BLACKLIST_IMPRESSIONS = 'blacklist_impressions';

    const METRIC_PLACEMENT_TYPE_CATEGORY = 'placement_type_category';

    const METRIC_RESOURCE_PLACEMENTS_COUNT = 'resource_placements_count';

    const METRIC_ACTIVE_RESOURCE_PLACEMENTS_COUNT = 'resource_active_placements_count';

    const METRIC_ECPM = 'ecpm';

    const METRIC_ECPC = 'ecpc';

    const METRIC_ECPA = 'ecpa';

    const METRIC_AVCPM = 'avcpm';

    const METRIC_UO = 'uo';

    const METRIC_RPC = 'rpc';

    const METRIC_ACTIVE_APP_ADS_COUNT = 'application_active_ads_count';

    const METRIC_DEACTIVATED_APP_ADS_COUNT = 'application_not_active_ads_count';
}