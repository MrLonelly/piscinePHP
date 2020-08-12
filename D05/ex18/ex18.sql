SELECT id_distrib, name FROM distrib WHERE id_distrib=42 OR id_distrib BETWEEN '63' AND '69' OR id_distrib BETWEEN '88' AND '90' OR id_distrib=71 AND name LIKE '%yy%' LIMIT 2, 5;
