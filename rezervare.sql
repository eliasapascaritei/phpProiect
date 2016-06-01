--
-- PostgreSQL database dump
--

SET client_encoding = 'SQL_ASCII';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: rezervare_elias_pr; Type: TABLE; Schema: public; Owner: apascaritei.elias-olivian; Tablespace: 
--

CREATE TABLE rezervare_elias_pr (
    id_rez integer NOT NULL,
    cod_client character varying,
    cod_oferta integer,
    data date,
    nr_persoane integer,
    pret_total double precision,
    hotel character(50)
);


ALTER TABLE public.rezervare_elias_pr OWNER TO "apascaritei.elias-olivian";

--
-- Name: rezervare_elias_pr_id_rez_seq; Type: SEQUENCE; Schema: public; Owner: apascaritei.elias-olivian
--

CREATE SEQUENCE rezervare_elias_pr_id_rez_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.rezervare_elias_pr_id_rez_seq OWNER TO "apascaritei.elias-olivian";

--
-- Name: rezervare_elias_pr_id_rez_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: apascaritei.elias-olivian
--

ALTER SEQUENCE rezervare_elias_pr_id_rez_seq OWNED BY rezervare_elias_pr.id_rez;


--
-- Name: rezervare_elias_pr_id_rez_seq; Type: SEQUENCE SET; Schema: public; Owner: apascaritei.elias-olivian
--

SELECT pg_catalog.setval('rezervare_elias_pr_id_rez_seq', 47, true);


--
-- Name: id_rez; Type: DEFAULT; Schema: public; Owner: apascaritei.elias-olivian
--

ALTER TABLE rezervare_elias_pr ALTER COLUMN id_rez SET DEFAULT nextval('rezervare_elias_pr_id_rez_seq'::regclass);


--
-- Data for Name: rezervare_elias_pr; Type: TABLE DATA; Schema: public; Owner: apascaritei.elias-olivian
--

COPY rezervare_elias_pr (id_rez, cod_client, cod_oferta, data, nr_persoane, pret_total, hotel) FROM stdin;
42	1234	9	2014-06-17	2	1600	Trevi 5 stele                                     
43	1234	13	2014-06-17	3	3750	Plaza 5 stele                                     
45	147	13	2014-06-18	2	2100	MagicWorld 4 stele                                
47	147	1	2014-06-18	2	900	altceva 5 stele                                   
\.


--
-- Name: modificare_oferta_elias; Type: TRIGGER; Schema: public; Owner: apascaritei.elias-olivian
--

CREATE TRIGGER modificare_oferta_elias
    AFTER INSERT OR DELETE ON rezervare_elias_pr
    FOR EACH ROW
    EXECUTE PROCEDURE modif_oferta_elias_pr();


--
-- PostgreSQL database dump complete
--

