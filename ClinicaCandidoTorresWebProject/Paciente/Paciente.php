<?php

/**
 * Description of Paciente
 *
 * @author Felipe
 */
class Paciente {

    //ATRIBUTOS DA CLASSE PACIENTE
    private $numeroProntuarioPaciente;
    private $nomePaciente;
    private $sexoPaciente;
    private $dataNascPaciente;
    private $cpfPaciente;
    private $rgPaciente;
    private $emailPaciente;
    private $profissoPaciente;
    private $tipoDeAtendimento;
    private $acompanhantePaciente;
    private $estrangeiroPaciente;
    private $telefonePaciente;
    private $celularPaciente;
    private $indicacaoPaciente;
    private $estadoCivilPaciente;
    private $enderecoPaciente;
    private $bairroPaciente;
    private $numEnderecoPaciente;
    private $cidadePaciente;
    private $estadoPaciente;
    private $complementoPaciente;
    private $cepPaciente;

    //METODOS GEETS E SEETS
    function setNumeroProntuarioPaciente($numeroProntuarioPaciente) {
        $this->numeroProntuarioPaciente = $numeroProntuarioPaciente;
    }

    function getNumeroProntuarioPaciente() {
        return $this->numeroProntuarioPaciente;
    }

    function setNomePaciente($nomePaciente) {
        $this->nomePaciente = $nomePaciente;
    }

    function getNomePaciente() {
        return $this->nomePaciente;
    }

    function setSexoPaciente($sexoPaciente) {
        $this->sexoPaciente = $sexoPaciente;
    }

    function getSexoPaciente() {
        return $this->sexoPaciente;
    }

    function setDataNascPaciente($dataNascPaciente) {
        $this->dataNascPaciente = $dataNascPaciente;
    }

    function getDataNascPaciente() {
        return $this->dataNascPaciente;
    }

    function setcCpfPaciente($cpfPaciente) {
        $this->cpfPaciente = $cpfPaciente;
    }

    function getCpfPaciente() {
        return $this->cpfPaciente;
    }

    function setRgPaciente($rgPaciente) {
        $this->rgPaciente = $rgPaciente;
    }

    function getRgPaciente() {
        return $this->rgPaciente;
    }

    function setEmailPaciente($emailPaciente) {
        $this->emailPaciente = $emailPaciente;
    }

    function getEmailPaciente() {
        return $this->emailPaciente;
    }

    function setProfissoPaciente($profissoPaciente) {
        $this->profissoPaciente = $profissoPaciente;
    }

    function getProfissaoPaciente() {
        return $this->profissoPaciente;
    }

    function setTipoDeAtendimento($tipoDeAtendimento) {
        $this->tipoDeAtendimento = $tipoDeAtendimento;
    }

    function getTipoDeAtendimento() {
        return $this->tipoDeAtendimento;
    }

    function setAcompanhantePaciente($acompanhantePaciente) {
        $this->acompanhantePaciente = $acompanhantePaciente;
    }

    function getAcompanhantePaciente() {
        return $this->acompanhantePaciente;
    }

    function setEstrangeiroPaciente($estrangeiroPaciente) {
        $this->estrangeiroPaciente = $estrangeiroPaciente;
    }

    function getEstrangeiroPaciente() {
        return $this->estrangeiroPaciente;
    }

    function setTelefonePaciente($telefonePaciente) {
        $this->telefonePaciente = $telefonePaciente;
    }

    function getTelefonePaciente() {
        return $this->telefonePaciente;
    }

    function setCelularPaciente($celularPaciente) {
        $this->celularPaciente = $celularPaciente;
    }

    function getCelularPaciente() {
        return $this->celularPaciente;
    }

    function setIndicacaoPaciente($indicacaoPaciente) {
        $this->indicacaoPaciente = $indicacaoPaciente;
    }

    function getIndicacaoPaciente() {
        return $this->indicacaoPaciente;
    }

    function setEstadoCivilPaciente($estadoCivilPaciente) {
        $this->estadoCivilPaciente = $estadoCivilPaciente;
    }

    function getEstadoCivilPaciente() {
        return $this->estadoCivilPaciente;
    }

    function setEnderecoPaciente($enderecoPaciente) {
        $this->enderecoPaciente = $enderecoPaciente;
    }

    function getEnderecoPaciente() {
        return $this->enderecoPaciente;
    }

    function setBairroPaciente($bairroPaciente) {
        $this->bairroPaciente = $bairroPaciente;
    }

    function getBairroPaciente() {
        return $this->bairroPaciente;
    }

    function setNumEnderecoPaciente($numEnderecoPaciente) {
        $this->numEnderecoPaciente = $numEnderecoPaciente;
    }

    function getNumEnderecoPaciente() {
        return $this->numEnderecoPaciente;
    }

    function setCidadePaciente($cidadePaciente) {
        $this->cidadePaciente = $cidadePaciente;
    }

    function getCidadePaciente() {
        return $this->cidadePaciente;
    }

    function setEstadoPaciente($estadoPaciente) {
        $this->estadoPaciente = $estadoPaciente;
    }

    function getEstadoPaciente() {
        return $this->estadoPaciente;
    }

    function setComplementoPaciente($complementoPaciente) {
        $this->complementoPaciente = $complementoPaciente;
    }

    function getComplementoPaciente() {
        return $this->complementoPaciente;
    }

    function setCepPaciente($cepPaciente) {
        $this->cepPaciente = $cepPaciente;
    }

    function getCepPaciente() {
        return $this->cepPaciente;
    }

}