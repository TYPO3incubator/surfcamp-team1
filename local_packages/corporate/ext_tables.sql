CREATE TABLE tt_content (
    card_items int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_surfcampcorporate_domain_model_product (
    title          varchar(255)     DEFAULT ''  NOT NULL,
    slug           varchar(2048)    DEFAULT ''  NOT NULL,
    article_number varchar(255)     DEFAULT ''  NOT NULL,
    lead           text,
    images         int(11) unsigned DEFAULT '0' NOT NULL,
    documents      int(11) unsigned DEFAULT '0' NOT NULL,
    categories     varchar(2048)    DEFAULT ''  NOT NULL,

    og_title       varchar(255)     DEFAULT ''  NOT NULL,
    og_description text,
    og_image       int(11) unsigned DEFAULT '0' NOT NULL,

    key slug(slug(127))
);

CREATE TABLE tx_surfcampcorporate_domain_model_card_item (
    header     varchar(255)  DEFAULT ''  NOT NULL,
    date       varchar(2048) DEFAULT ''  NOT NULL,
    bodytext   text,
    link       varchar(2048) DEFAULT ''  NOT NULL,
    link_label varchar(2048) DEFAULT ''  NOT NULL,

    parent_id  int(11)       DEFAULT '0' NOT NULL,
    tablenames varchar(64)   DEFAULT ''  NOT NULL
);

CREATE TABLE tx_surfcampcorporate_domain_model_accordion_item (
    header     varchar(255) DEFAULT ''  NOT NULL,
    bodytext   text,

    parent_id  int(11)      DEFAULT '0' NOT NULL,
    tablenames varchar(64)  DEFAULT ''  NOT NULL
);

CREATE TABLE tx_surfcampcorporate_domain_model_product_size (
    title      varchar(255) DEFAULT ''  NOT NULL,
    bodytext   text,

    parent_id  int(11)      DEFAULT '0' NOT NULL,
    tablenames varchar(64)  DEFAULT ''  NOT NULL
);