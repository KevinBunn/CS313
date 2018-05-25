INSERT INTO "user" (first_name, last_name, username, password, date_joined)
VALUES (
    'Kyle'
,   'Jones'
,   'KyleRocks'
,   'P@ssw0rd1'
,   '2017-06-15 09:34:21'
);

INSERT INTO "user" (first_name, last_name, username, password, date_joined)
VALUES (
    'Mary'
,   'Bunn'
,   'SheepySheep'
,   'P@ssw0rd1'
,   '2018-05-23 09:34:21'
);

INSERT INTO project (admin_id, name, date_created, goal_end_date)
VALUES (
    1
,   'My Project'
,   '2018-01-01 08:08:45'
,   '2018-10-10 12:00:00'
);

INSERT INTO project (admin_id, name, date_created, goal_end_date)
VALUES (
    1
,   'House Work'
,   '2018-01-01 09:09:45'
,   '2019-01-01 12:00:00'
);

INSERT INTO project (admin_id, name, date_created, goal_end_date)
VALUES (
    2
,   'Sheep Care'
,   '2018-03-05 00:08:45'
,   '2018-12-23 14:00:00'
);

INSERT INTO user_to_project (user_id, project_id)
VALUES (
    1,
    1
);

INSERT INTO user_to_project (user_id, project_id)
VALUES (
    1,
    2
);

INSERT INTO user_to_project (user_id, project_id)
VALUES (
    2,
    3
);

INSERT INTO category (project_id, name, date_created, goal_end_date)
VALUES (
    1
,   'category1'
,   '2018-01-01 07:00:08'
,   '2018-05-01 012:00:00'
);

INSERT INTO category (project_id, name, date_created, goal_end_date)
VALUES (
    1
,   'category2'
,   '2018-01-01 07:00:08'
,   null
);

INSERT INTO category (project_id, name, date_created, goal_end_date)
VALUES (
    1
,   'category2'
,   '2018-01-01 07:00:08'
,   null
);

INSERT INTO category (project_id, name, date_created, goal_end_date)
VALUES (
    2
,   'Things I need to do'
,   '2018-01-02 07:00:00'
,   null
);

INSERT INTO category (project_id, name, date_created, goal_end_date)
VALUES (
    3
,   'Tending To My Sheep'
,   '2018-03-05 01:00:00'
,   '2018-09-10 10:00:00'
);


INSERT INTO task (category_id, name, date_created, goal_end_date, description, priority, severity, user_id, status)
VALUES (
    1
,   'task1'
,   '2018-01-01 08:00:08'
,   '2018-01-10 07:00:08'
,   'This is a decription'
,   1
,   2
,   null
,   'Open'
);

INSERT INTO task (category_id, name, date_created, goal_end_date, description, priority, severity, user_id, status)
VALUES (
    1
,   'task2'
,   '2018-01-01 08:10:08'
,   '2018-01-10 07:00:08'
,   'This is another decription'
,   2
,   3
,   null
,   'Open'
);

INSERT INTO task (category_id, name, date_created, goal_end_date, description, priority, severity, user_id, status)
VALUES (
    2
,   'task1'
,   '2018-01-01 09:10:08'
,   '2018-02-14 07:00:08'
,   'decription'
,   1
,   1
,   null
,   'Test'
);

INSERT INTO task (category_id, name, date_created, goal_end_date, description, priority, severity, user_id, status)
VALUES (
    3
,   'Get Married'
,   '2018-01-01 08:10:08'
,   '2018-12-10 13:00:00'
,   'Hopefully someone by the end of the year'
,   1
,   1
,   null
,   'Open'
);

INSERT INTO task (category_id, name, date_created, goal_end_date, description, priority, severity, user_id, status)
VALUES (
    3
,   'Clean the house'
,   '2018-01-01 10:10:23'
,   '2018-01-07 13:00:00'
,   'Kitchen, Bedroom, and Bathroom'
,   2
,   3
,   null
,   'Complete'
);

INSERT INTO task (category_id, name, date_created, goal_end_date, description, priority, severity, user_id, status)
VALUES (
    4
,   'Shear'
,   '2018-01-01 10:10:23'
,   '2018-05-07 13:00:00'
,   'Sheep are getting too wooly'
,   2
,   3
,   null
,   'Open'
);

INSERT INTO task (category_id, name, date_created, goal_end_date, description, priority, severity, user_id, status)
VALUES (
    4
,   'Feed'
,   '2018-01-01 10:10:23'
,   '2018-01-01 20:00:00'
,   'They are getting hungry again'
,   1
,   1
,   null
,   'Complete'
);