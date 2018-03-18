<?php

class Block
{
	public $index;
	public $timestamp;
	public $data;
	public $previousHash;
	public $hash;

	public function __construct(int $index, int $timestamp, $data, string $previousHash)
	{
		$this->index        = $index;
		$this->timestamp    = $timestamp;
		$this->data         = $data;
		$this->previousHash = $previousHash;
		$this->hash         = $this->hashBlock();
	}

	private function hashBlock()
	{
		return password_hash(
			(string) $this->index . (string) $this->timestamp . (string) $this->data . (string) $this->previousHash,
			PASSWORD_DEFAULT
		);
	}
}

function createGenesisBlock()
{
	return new Block(0, time(), 'Genesis Block', '0');
}

function nextBlock(Block $lastBlock): Block
{
	$index     = $lastBlock->index + 1;
	$timestamp = time();
	$data      = "Hey, I'm block " . $index;
	$hash      = $lastBlock->hash;

	return new Block($index, $timestamp, $data, $hash);
}
