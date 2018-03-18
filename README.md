# SnakeCoin

A minimal BlockChain implementation in PHP

In an [article on dev.to](https://dev.to/aunyks/lets-build-the-tiniest-blockchain), Gerald Nash showed a simple blockchain implementation in less than 50 lines of Python 2 code, which he called SnakeCoin.

This is a port of the code from that article to PHP.

## Try It!

To run the demo, just type

    $ php demo/blockchain.php

The output will be similar to

    Block #1 has been added to the blockchain!
    Hash: $2y$10$q9Pbe6np6tP9CnRnn..vE.9kKnw0SG1SZZSQGy.DUJ/0CU2qR/14a
    
    Block #2 has been added to the blockchain!
    Hash: $2y$10$iAZUTNKzq3FGxAqBePBt3e7zWvq0IhLL0CiR8dSQMxAKQJ9e0YKb.
    
    Block #3 has been added to the blockchain!
    Hash: $2y$10$tay88SxANLOoWI7PsYrgE.vshyFU1FsoS7tNC221Cp9lOMzeoqENS
    
    Block #4 has been added to the blockchain!
    Hash: $2y$10$Sgt6j50sFQnr6Vcy3f8vnuCG6FBkG4rqEEb1jccLhDZnlmpXNSslC
    
    Block #5 has been added to the blockchain!
    Hash: $2y$10$tyX5lKyr1GfvZ06n7b8jNeL8sQzy6tShe3aaOaLt06Jgjy4EW.3kG
    
    Block #6 has been added to the blockchain!
    Hash: $2y$10$zBQLyyO8P8iqWiXZXXyiI.XKwBSn9cBSbkXO0l1VSpMWtclahGlpC
    
    Block #7 has been added to the blockchain!
    Hash: $2y$10$itLvzovVNCO.BX6CkQ6JS.Lc1OHJp0mMz59xwMskMK.p5PTTtpPI6
    
    Block #8 has been added to the blockchain!
    Hash: $2y$10$W2GH3OzsRou.B9dAjwgv0eTbTSCGWLb1CMLj.4kQqbMWXApaIux9W
    
    Block #9 has been added to the blockchain!
    Hash: $2y$10$UlOHuTsLl2XyUpr50T.nhu.5p4UZ13MUJ2dQHIP8anazBXpIjC9HK
    
    Block #10 has been added to the blockchain!
    Hash: $2y$10$sB.EZLcapkS/Ro.VI.15cuXIlOxwAMEBhJ3aZ.cx9qqswerIraShO
    
    Block #11 has been added to the blockchain!
    Hash: $2y$10$fpixFITLV6IE8hs5HRi.D.m0COhDk6ERbkjVKs0TQJ97NtSDk23Py
    
    Block #12 has been added to the blockchain!
    Hash: $2y$10$NZ.etTzG13ys6/paNS/FU.Un58IKoxgFil5Q51/XMKUvNzk2cKPVi
    
    Block #13 has been added to the blockchain!
    Hash: $2y$10$gA3T3FlbJ3eQo6DSTB/ZX.D9aERlAeJ0AF.OzK.qo4j3ZC2i2prwa
    
    Block #14 has been added to the blockchain!
    Hash: $2y$10$97anIJHvrytFxjx6fWV9jORuSJmkC.3SisuvWI1DgPnZMpxv/LZt6
    
    Block #15 has been added to the blockchain!
    Hash: $2y$10$4noQIttV5GAjrZfc8qkeJOZnANaZUuX7MGn0WBc633/56kkCTnxXC
    
    Block #16 has been added to the blockchain!
    Hash: $2y$10$lOANKf0CajS4SzICYb3eD.dmy.CmBn3rWlGkTtMUE67xJglGU6SqS
    
    Block #17 has been added to the blockchain!
    Hash: $2y$10$YSM1GQRTr.HIsAYS3VJ/rOOha.m7QtFBj62uOKUnwJRU9Bs6KfvdC
    
    Block #18 has been added to the blockchain!
    Hash: $2y$10$qKU6tZnMxWMjb6jUpKqfc.rAPOGcvb/MsCpesAVKaU6n6XfMsIVD2
    
    Block #19 has been added to the blockchain!
    Hash: $2y$10$9fYPjThM58nyBPxJz59gSujyEoCO1TmucvtuVXpybtcnGlVgCtPtG
    
    Block #20 has been added to the blockchain!
    Hash: $2y$10$nb6hGuTabiZ2xtQf/Da5U.vOmjEm4uXlLrVGySCLXXIaN6tPOLyxe

## Hashing

The original implementation uses `SHA256` for hashing.
In this implementation, the `password_hash()` function is used
with the `PASSWORD_DEFAULT` algorithm, which always uses the strongest hashing available (currently **BCrypt**, see [documentation](http://www.php.net/manual/en/password.constants.php)).

It is worth noting that over time the hashing algorithm can (and likely will) change. Therefore you should be aware that the length of the resulting hash can change. You should store the resulting hash in a way that can store more than 60 characters (255 is the recommended width).
