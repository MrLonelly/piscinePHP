SELECT count(DISTINCT id_film) AS 'moovie' FROM member_history WHERE member_history.date BETWEEN '2006/10/30' AND '2007/07/27' OR (EXTRACT(DAY FROM date)=24 AND EXTRACT(MONTH FROM date)=12);
