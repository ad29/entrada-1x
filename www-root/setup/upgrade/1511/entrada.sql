ALTER TABLE `medbiq_instructional_methods` ADD `code` VARCHAR(10)  NULL  DEFAULT NULL  AFTER `instructional_method_id`;

UPDATE `medbiq_instructional_methods` SET `code` = "IM001" WHERE `instructional_method_id` = '1';
UPDATE `medbiq_instructional_methods` SET `code` = "IM002" WHERE `instructional_method_id` = '2';
UPDATE `medbiq_instructional_methods` SET `code` = "IM003" WHERE `instructional_method_id` = '3';
UPDATE `medbiq_instructional_methods` SET `code` = "IM004" WHERE `instructional_method_id` = '4';
UPDATE `medbiq_instructional_methods` SET `code` = "IM005" WHERE `instructional_method_id` = '5';
UPDATE `medbiq_instructional_methods` SET `code` = "IM006" WHERE `instructional_method_id` = '6';
UPDATE `medbiq_instructional_methods` SET `code` = "IM007" WHERE `instructional_method_id` = '7';
UPDATE `medbiq_instructional_methods` SET `code` = "IM008" WHERE `instructional_method_id` = '8';
UPDATE `medbiq_instructional_methods` SET `code` = "IM009" WHERE `instructional_method_id` = '9';
UPDATE `medbiq_instructional_methods` SET `code` = "IM010" WHERE `instructional_method_id` = '10';
UPDATE `medbiq_instructional_methods` SET `code` = "IM011" WHERE `instructional_method_id` = '11';
UPDATE `medbiq_instructional_methods` SET `code` = "IM012" WHERE `instructional_method_id` = '12';
UPDATE `medbiq_instructional_methods` SET `code` = "IM013" WHERE `instructional_method_id` = '13';
UPDATE `medbiq_instructional_methods` SET `code` = "IM014" WHERE `instructional_method_id` = '14';
UPDATE `medbiq_instructional_methods` SET `code` = "IM015" WHERE `instructional_method_id` = '15';
UPDATE `medbiq_instructional_methods` SET `code` = "IM016" WHERE `instructional_method_id` = '16';
UPDATE `medbiq_instructional_methods` SET `code` = "IM017" WHERE `instructional_method_id` = '17';
UPDATE `medbiq_instructional_methods` SET `code` = "IM018" WHERE `instructional_method_id` = '18';
UPDATE `medbiq_instructional_methods` SET `code` = "IM019" WHERE `instructional_method_id` = '19';
UPDATE `medbiq_instructional_methods` SET `code` = "IM020" WHERE `instructional_method_id` = '20';
UPDATE `medbiq_instructional_methods` SET `code` = "IM021" WHERE `instructional_method_id` = '21';
UPDATE `medbiq_instructional_methods` SET `code` = "IM022" WHERE `instructional_method_id` = '22';
UPDATE `medbiq_instructional_methods` SET `code` = "IM023" WHERE `instructional_method_id` = '23';
UPDATE `medbiq_instructional_methods` SET `code` = "IM024" WHERE `instructional_method_id` = '24';
UPDATE `medbiq_instructional_methods` SET `code` = "IM025" WHERE `instructional_method_id` = '25';
UPDATE `medbiq_instructional_methods` SET `code` = "IM026" WHERE `instructional_method_id` = '26';
UPDATE `medbiq_instructional_methods` SET `code` = "IM027" WHERE `instructional_method_id` = '27';
UPDATE `medbiq_instructional_methods` SET `code` = "IM028" WHERE `instructional_method_id` = '28';
UPDATE `medbiq_instructional_methods` SET `code` = "IM029" WHERE `instructional_method_id` = '29';
UPDATE `medbiq_instructional_methods` SET `code` = "IM030" WHERE `instructional_method_id` = '30';

ALTER TABLE `medbiq_assessment_methods` ADD `code` VARCHAR(10)  NULL  DEFAULT NULL  AFTER `assessment_method_id`;

UPDATE `medbiq_assessment_methods` SET `code` = "AM001" WHERE `assessment_method_id` = '1';
UPDATE `medbiq_assessment_methods` SET `code` = "AM002" WHERE `assessment_method_id` = '2';
UPDATE `medbiq_assessment_methods` SET `code` = "AM003" WHERE `assessment_method_id` = '3';
UPDATE `medbiq_assessment_methods` SET `code` = "AM004" WHERE `assessment_method_id` = '4';
UPDATE `medbiq_assessment_methods` SET `code` = "AM005" WHERE `assessment_method_id` = '5';
UPDATE `medbiq_assessment_methods` SET `code` = "AM006" WHERE `assessment_method_id` = '6';
UPDATE `medbiq_assessment_methods` SET `code` = "AM007" WHERE `assessment_method_id` = '7';
UPDATE `medbiq_assessment_methods` SET `code` = "AM008" WHERE `assessment_method_id` = '8';
UPDATE `medbiq_assessment_methods` SET `code` = "AM009" WHERE `assessment_method_id` = '9';
UPDATE `medbiq_assessment_methods` SET `code` = "AM010" WHERE `assessment_method_id` = '10';
UPDATE `medbiq_assessment_methods` SET `code` = "AM011" WHERE `assessment_method_id` = '11';
UPDATE `medbiq_assessment_methods` SET `code` = "AM012" WHERE `assessment_method_id` = '12';
UPDATE `medbiq_assessment_methods` SET `code` = "AM013" WHERE `assessment_method_id` = '13';
UPDATE `medbiq_assessment_methods` SET `code` = "AM014" WHERE `assessment_method_id` = '14';
UPDATE `medbiq_assessment_methods` SET `code` = "AM015" WHERE `assessment_method_id` = '15';
UPDATE `medbiq_assessment_methods` SET `code` = "AM016" WHERE `assessment_method_id` = '16';
UPDATE `medbiq_assessment_methods` SET `code` = "AM017" WHERE `assessment_method_id` = '17';
UPDATE `medbiq_assessment_methods` SET `code` = "AM018" WHERE `assessment_method_id` = '18';

UPDATE `settings` SET `value` = '1511' WHERE `shortname` = 'version_db';