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
-- Name: admin_elias_pr; Type: TABLE; Schema: public; Owner: apascaritei.elias-olivian; Tablespace: 
--

CREATE TABLE admin_elias_pr (
    cnp character varying,
    usr character varying,
    parola character varying,
    nume character varying,
    prenume character varying,
    adresa character varying,
    telefon character varying
);


ALTER TABLE public.admin_elias_pr OWNER TO "apascaritei.elias-olivian";

--
-- Data for Name: admin_elias_pr; Type: TABLE DATA; Schema: public; Owner: apascaritei.elias-olivian
--

COPY admin_elias_pr (cnp, usr, parola, nume, prenume, adresa, telefon) FROM stdin;
1970846081984	Elias	adminElias	Apascaritei	Elias-Olivian	Dorohoi/Botosani	0749104523
\.


--
-- PostgreSQL database dump complete
--

