CREATE OR REPLACE FUNCTION public.sp_publishers_delete(
    pub_id integer
) RETURNS void LANGUAGE sql
AS
$function$

    DELETE FROM public.publishers
    WHERE "id" = pub_id

$function$
