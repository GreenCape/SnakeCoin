<?php
require 'src/Block.php';

// Create the blockchain and add the genesis block
$blockChain    = [createGenesisBlock()];
$previousBlock = $blockChain[0];

// How many blocks should we add to the chain after the genesis block
$numOfBlocksToAdd = 20;

# Add blocks to the chain
for ($i = 0; $i < $numOfBlocksToAdd; ++$i)
{
	$blockToAdd    = nextBlock($previousBlock);
	$blockChain[]  = $blockToAdd;
	$previousBlock = $blockToAdd;

	// Tell everyone about it!
	printf("Block #%d has been added to the blockchain!\n", $blockToAdd->index);
	printf("Hash: %s\n\n", $blockToAdd->hash);
}
