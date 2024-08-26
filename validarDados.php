<?php

function filterValidateData($data) {
  //Sanitarização dos inputs
  $data = filter_var_array($data, [
    "nome" => FILTER_SANITIZE_SPECIAL_CHARS,
    "email" => FILTER_SANITIZE_EMAIL,
    "telefone" =>  FILTER_SANITIZE_SPECIAL_CHARS,
    "assunto" =>FILTER_SANITIZE_SPECIAL_CHARS,
    "mensagem" => FILTER_SANITIZE_SPECIAL_CHARS
  ]);

  if(strlen($data["nome"]) > 45 || !$data["nome"]) return false;
  if(strlen($data["email"]) > 255 || !$data["email"]) return false;
  if(strlen($data["telefone"]) > 11 || !$data["telefone"]) return false;
  if(strlen($data["assunto"]) > 30 || !$data["assunto"]) return false;
  if(strlen($data["mensagem"]) > 255 || !$data["mensagem"]) return false;

  return $data;
}