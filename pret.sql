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
-- Name: pret_elias_pr; Type: TABLE; Schema: public; Owner: apascaritei.elias-olivian; Tablespace: 
--

CREATE TABLE pret_elias_pr (
    cod_oferta integer,
    pret1 double precision,
    pret2 double precision
);


ALTER TABLE public.pret_elias_pr OWNER TO "apascaritei.elias-olivian";

--
-- Data for Name: pret_elias_pr; Type: TABLE DATA; Schema: public; Owner: apascaritei.elias-olivian
--

COPY pret_elias_pr (cod_oferta, pret1, pret2) FROM stdin;
1	300	450
9	800	500
10	400	450
13	1250	1050
17	800	1050
\.


--
-- PostgreSQL database dump complete
--

