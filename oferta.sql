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
-- Name: oferta_elias_pr; Type: TABLE; Schema: public; Owner: apascaritei.elias-olivian; Tablespace: 
--

CREATE TABLE oferta_elias_pr (
    cod_oferta integer NOT NULL,
    destinatia character varying,
    nr_zile integer,
    nr_locuri integer,
    transport character varying,
    data1 date,
    data2 date,
    hotel1 character varying,
    hotel2 character varying
);


ALTER TABLE public.oferta_elias_pr OWNER TO "apascaritei.elias-olivian";

--
-- Name: oferta_elias_pr_cod_oferta_seq; Type: SEQUENCE; Schema: public; Owner: apascaritei.elias-olivian
--

CREATE SEQUENCE oferta_elias_pr_cod_oferta_seq
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.oferta_elias_pr_cod_oferta_seq OWNER TO "apascaritei.elias-olivian";

--
-- Name: oferta_elias_pr_cod_oferta_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: apascaritei.elias-olivian
--

ALTER SEQUENCE oferta_elias_pr_cod_oferta_seq OWNED BY oferta_elias_pr.cod_oferta;


--
-- Name: oferta_elias_pr_cod_oferta_seq; Type: SEQUENCE SET; Schema: public; Owner: apascaritei.elias-olivian
--

SELECT pg_catalog.setval('oferta_elias_pr_cod_oferta_seq', 17, true);


--
-- Name: cod_oferta; Type: DEFAULT; Schema: public; Owner: apascaritei.elias-olivian
--

ALTER TABLE oferta_elias_pr ALTER COLUMN cod_oferta SET DEFAULT nextval('oferta_elias_pr_cod_oferta_seq'::regclass);


--
-- Data for Name: oferta_elias_pr; Type: TABLE DATA; Schema: public; Owner: apascaritei.elias-olivian
--

COPY oferta_elias_pr (cod_oferta, destinatia, nr_zile, nr_locuri, transport, data1, data2, hotel1, hotel2) FROM stdin;
13	New York,SUA	14	20	avion	2014-10-01	2014-10-15	Plaza 5 stele	MagicWorld 4 stele
9	Roma,Italia	10	3	avion	2014-06-08	2014-06-18	Trevi 5 stele	Alpi 3 stele
17	Hong Kong	6	12	avion	2014-07-03	2014-07-09	Jackie Chan 5 stele	Jet Li 5 stele
1	Berlin,Germania	7	8	avion	2014-06-08	2014-06-15	ceva 4 stele	altceva 5 stele
10	Oslo,Norvegia	5	8	avion	2014-06-10	2014-06-15	Harald 4 stele	Oslo Berg 4 stele
\.


--
-- Name: stergere_oferta_elias; Type: TRIGGER; Schema: public; Owner: apascaritei.elias-olivian
--

CREATE TRIGGER stergere_oferta_elias
    AFTER DELETE ON oferta_elias_pr
    FOR EACH ROW
    EXECUTE PROCEDURE sterge_oferta_elias_pr();


--
-- PostgreSQL database dump complete
--

