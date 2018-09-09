CREATE OR REPLACE FUNCTION public.sp_publishers_select(pub_name varchar(40))
RETURNS json AS
$function$
    SELECT json_agg(publishers) FROM (
        SELECT * FROM publishers
        WHERE "name" LIKE '%' || pub_name || '%'
    ) AS publishers;
$function$
LANGUAGE sql
