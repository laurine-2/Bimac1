-- INSERT INTO `questions` (`id`, `description`, `sub_category`, `reponse_1`, `reponse_2`, `reponse_3`, `reponse_4`, `explication`) VALUES

-- (1, 'Reset adm password :',1, 'ok', 'nok', 'need renforcement', 'need documentation '),
-- (2, 'Create a personal safe :', 1,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (3, 'Add adm account to personal safe :', 1,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (4, 'Setup MobaXterm :', 1,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (5, 'Install and setup SQL Workbench :', 1, 'ok', 'nok', 'need renforcement', 'need documentation '),
-- (6, 'Install Control-M local client :',  1,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (7, 'Create a ServiceNow dashboard with relavant reports :', 1,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (8, 'Check access to team confluence page :', 1,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (9, 'Check URLs in newcomers page :', 1,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (10, 'Communicate with Dev teams by email (list of contact) :', 2, 'ok', 'nok', 'need renforcement', 'need documentation '),
-- (11, 'Communicate with Infra/Support teams by email (list of contact) :', 2,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (12, 'Communicate with the team by email :', 2,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (13, 'Schedule a Teams meeting :', 2,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (14, 'Handle a incident ticket (INC) :', 3,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (15, 'Handle a change request ticket (CHG) :',3, 'ok', 'nok', 'need renforcement', 'need documentation '),
-- (16, 'Create a incident ticket (INC) :', 3,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (17, 'Create a change ticket (CHG) :', 3,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (18, 'Create a requested item (RITM) :', 3,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (19, 'Look for approved packages in CIBEL :', 3,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (20, 'Look for laptops and thier owners :', 3,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (21, 'Search tickets | Create reports :', 3,'ok', 'nok', 'need renforcement', 'need documentation '),
-- (22, 'Use the Self-Service Portal and use the appropriate forms :', 3,'ok', 'nok', 'need renforcement', 'need documentation ')



INSERT INTO `questions` (`id`, `description`, `subcategory_id`, `reponse_1`, `reponse_2`, `reponse_3`, `reponse_4`, `created_at`, `updated_at`) VALUES
(1, 'Reset adm password :', 1, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(2, 'Create a personal safe :', 1, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(3, 'Add adm account to personal safe :', 1, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(4, 'Setup MobaXterm :', 1, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(5, 'Install and setup SQL Workbench :', 1, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(6, 'Install Control-M local client :', 1, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(7, 'Create a ServiceNow dashboard with relevant reports :', 1, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(8, 'Check access to team Confluence page :', 1, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(9, 'Check URLs in newcomers page :', 1, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(10, 'Communicate with Dev teams by email (list of contact) :', 2, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(11, 'Communicate with Infra/Support teams by email (list of contact) :', 2, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(12, 'Communicate with the team by email :', 2, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(13, 'Schedule a Teams meeting :', 2, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(14, 'Handle an incident ticket (INC) :', 3, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(15, 'Handle a change request ticket (CHG) :', 3, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(16, 'Create an incident ticket (INC) :', 3, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(17, 'Create a change ticket (CHG) :', 3, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(18, 'Create a requested item (RITM) :', 3, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(19, 'Look for approved packages in CIBEL :', 3, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(20, 'Look for laptops and their owners :', 3, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(21, 'Search tickets | Create reports :', 3, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW()),
(22, 'Use the Self-Service Portal and use the appropriate forms :', 3, 'ok', 'nok', 'need renforcement', 'need documentation', NOW(), NOW());

//----------------
INSERT INTO `subcategories`(`id`, `title`, `description`, `created_at`, `updated_at`) VALUES 
(1, 'Initial Setup', '', NOW(), NOW()),
(2, 'Communication', '', NOW(), NOW()),
(3, 'ServiceNow', '', NOW(), NOW());


