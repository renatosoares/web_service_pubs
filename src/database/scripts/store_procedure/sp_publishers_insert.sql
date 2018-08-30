CREATE OR REPLACE FUNCTION public.sp_publishers_insert(
    pub_name varchar(40),
    pub_city varchar(20),
    pub_state bpchar(2),
    pub_country varchar(30)
) RETURNS void LANGUAGE sql
AS
$function$
    INSERT INTO public.publishers
    ("name", "city", "state", "country", "created_at", "updated_at")
    VALUES(pub_name, pub_city, pub_state, pub_country, now(), now());
$function$
