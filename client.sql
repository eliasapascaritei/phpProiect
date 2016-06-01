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
-- Name: client_elias_pr; Type: TABLE; Schema: public; Owner: apascaritei.elias-olivian; Tablespace: 
--

CREATE TABLE client_elias_pr (
    cod_client character varying,
    nume character varying,
    prenume character varying,
    adresa character varying,
    telefon character varying,
    email character varying
);


ALTER TABLE public.client_elias_pr OWNER TO "apascaritei.elias-olivian";

--
-- Data for Name: client_elias_pr; Type: TABLE DATA; Schema: public; Owner: apascaritei.elias-olivian
--

COPY client_elias_pr (cod_client, nume, prenume, adresa, telefon, email) FROM stdin;
1450214050847	Costel	Ionel	undeva	0749105871	efsd@rr
1750101050505	Popescu	George	str mihai viteazu,50,dorohoi/BT	0749 104 523	ee@tt.com
1800303060606	Ionescu	Vlad	str mihai eminescu,50,dorohoi/BT	856974255	tt@com.ro
1234	Marius	Eu	adresa	1234567	a@y.com
147	olivian	olivian	aici si acolo	58741	olivian@olivian
\.


--
-- PostgreSQL database dump complete
--

