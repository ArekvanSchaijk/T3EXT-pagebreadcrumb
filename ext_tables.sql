#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	tx_pagebreadcrumb_exclude tinyint(4) unsigned DEFAULT '0' NOT NULL,
	tx_pagebreadcrumb_title varchar(255) DEFAULT '' NOT NULL
);