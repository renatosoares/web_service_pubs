CREATE OR REPLACE FUNCTION public.sp_publishers_select(
    pub_name varchar(40)
) RETURNS SETOF public.publishers
AS
$function$
	SELECT * FROM public.publishers
    WHERE name LIKE '%' || pub_name || '%';
$function$
LANGUAGE sql
