SELECT last_name, first_name, DATE(birthdate) AS birthdate FROM db_eutrodri.user_card WHERE YEAR(birthdate) LIKE '%1989%' ORDER BY last_name ASC;
