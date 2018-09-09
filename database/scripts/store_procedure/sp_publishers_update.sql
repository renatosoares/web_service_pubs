CREATE OR REPLACE FUNCTION public.sp_publishers_update(
    pub_id integer,
    pub_name varchar(40),
    pub_city varchar(20),
    pub_state bpchar(2),
    pub_country varchar(30)
) RETURNS void LANGUAGE sql AS
$function$
    UPDATE public.publishers
    SET "name"=pub_name, "city"=pub_city, "state"=pub_state, "country"=pub_country, "updated_at"=now()
    WHERE "id"=pub_id;
$function$
