SELECT `title` AS `Title`, `summary` AS `Summary`, `prod_year`
    FROM film
    INNER JOIN genre on film.id_genre = genre.id_genre
    WHERE genre.name = 'erotic'
    ORDER BY `prod_year` DESC;