#
# Table structure for table 'tx_surfcampcorporate_domain_model_product'
#
CREATE TABLE tx_surfcampcorporate_domain_model_product (
    title            varchar(255)  DEFAULT '' NOT NULL,
    slug             varchar(2048) DEFAULT '' NOT NULL,
    lead             text,
    image        int(11) unsigned DEFAULT '0' NOT NULL,
    documents        int(11) unsigned DEFAULT '0' NOT NULL,
    category         int(11) unsigned DEFAULT '0',

    og_title         varchar(255)  DEFAULT '' NOT NULL,
    og_description   text,
    og_image         int(11) unsigned DEFAULT '0' NOT NULL,

    key              slug(slug(127))
);