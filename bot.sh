#!/bin/bash
# Renkler
ESC_SEQ="\x1b["
COL_RESET=$ESC_SEQ"39;49;00m"
COL_GREEN=$ESC_SEQ"32;01m"
COL_GOLD=$ESC_SEQ"30;33m"
COL_RED=$ESC_SEQ"31;02m"

echo -e "$COL_RED
                  
                                             $COL_GOLD  
                 ╔/════════════════╔๑ஜ۩۞۩ஜ๑╗════════════════\╗
                 ║                                          ║
                 ║        ♦ Script created by bugresearcher ♦        ║
                 ║          ♦ Web bugresearcher.com ♦           ║
                 ║           ♦ Twitter Bugresearcher ♦            ║
                 ║                                          ║
                 ╚\════════════════╚๑ஜ۩۞۩ஜ๑╝════════════════/╝
				 $COL_RESET
				 "
 
if [ $1 = 'kapat' ] 
    then 
        pkill -f bugresearcher
		echo -e "bugresearcher: $COL_GREEN Bot Durduruldu! $COL_RESET"
    fi

if [ $1 = 'ac' ] 
    then 
        screen -A -m -d -S bugresearcher php ddosguard.php
		echo -e "bugresearcher: $COL_GREEN Bot Başlatıldı! $COL_RESET"
    fi
