<?php 
    require_once("Connexion.php");
    class Calendar extends Connexion 
    {
        public function createCalendar($_userId,$_nbrofcalendar,$_calendardate,$_layout,$_background,$_menu,$_title,$_day1,$_day1_type,$_day2,$_day2_type,$_day3,$_day3_type,$_day4,$_day4_type,$_day5,$_day5_type,$_day6,$_day6_type,$_day7,$_day7_type,$_day8,$_day8_type,$_day9,$_day9_type,$_day10,$_day10_type,$_day11,$_day11_type,$_day12,$_day12_type,$_day13,$_day13_type,$_day14,$_day14_type,$_day15,$_day15_type,$_day16,$_day16_type,$_day17,$_day17_type,$_day18,$_day18_type,$_day19,$_day19_type,$_day20,$_day20_type,$_day21,$_day21_type,$_day22,$_day22_type,$_day23,$_day23_type,$_day24,$_day24_type
        )
        {
            $requete = "INSERT INTO `calendars`(`calendar_userId`,`calendar_nbrofuser`, 
            `calendar_date`,`calendar_layout`, `calendar_background`,`calendar_menu`, `calendar_title`, `calendar_1`,`calendar_1_type`, `calendar_2`,`calendar_2_type`, `calendar_3`,`calendar_3_type`, `calendar_4`,`calendar_4_type`, `calendar_5`,`calendar_5_type`, `calendar_6`,`calendar_6_type`, `calendar_7`,`calendar_7_type`, `calendar_8`,`calendar_8_type`, `calendar_9`,`calendar_9_type`, `calendar_10`,`calendar_10_type`, `calendar_11`,`calendar_11_type`, `calendar_12`,`calendar_12_type`, `calendar_13`,`calendar_13_type`, `calendar_14`,`calendar_14_type`, `calendar_15`,`calendar_15_type`, `calendar_16`,`calendar_16_type`, `calendar_17`,`calendar_17_type`, `calendar_18`,`calendar_18_type`, `calendar_19`,`calendar_19_type`, `calendar_20`,`calendar_20_type`, `calendar_21`,`calendar_21_type`, `calendar_22`,`calendar_22_type`, `calendar_23`,`calendar_23_type`, `calendar_24`, `calendar_24_type`) VALUES (:userId,:nbrofcalendar,:calendardate,:layout,:background,:menu,:title,:day1,:day1_type,:day2,:day2_type,:day3,:day3_type,:day4,:day4_type,:day5,:day5_type,:day6,:day6_type,:day7,:day7_type,:day8,:day8_type,:day9,:day9_type,:day10,:day10_type,:day11,:day11_type,:day12,:day12_type,:day13,:day13_type,:day14,:day14_type,:day15,:day15_type,:day16,:day16_type,:day17,:day17_type,:day18,:day18_type,:day19,:day19_type,:day20,:day20_type,:day21,:day21_type,:day22,:day22_type,:day23,:day23_type,:day24,:day24_type)";      

            $tabChamps= array(
                ":userId" => $_userId,
                ":nbrofcalendar"=> $_nbrofcalendar,
                ":calendardate"=>$_calendardate,
                ":layout" => $_layout,
                ":background" => $_background,
                ":menu" => $_menu,
                ":title" => $_title,
                ":day1" => $_day1,
                ":day1_type" => $_day1_type,
                ":day2" => $_day2,
                ":day2_type" => $_day2_type,
                ":day3" => $_day3,
                ":day3_type" => $_day3_type,
                ":day4" => $_day4,
                ":day4_type" => $_day4_type,
                ":day5" => $_day5,
                ":day5_type" => $_day5_type,
                ":day6" => $_day6,
                ":day6_type" => $_day6_type,
                ":day7" => $_day7,
                ":day7_type" => $_day7_type,
                ":day8" => $_day8,
                ":day8_type" => $_day8_type,
                ":day9" => $_day9,
                ":day9_type" => $_day9_type,
                ":day10" => $_day10,
                ":day10_type" => $_day10_type,
                ":day11" => $_day11,
                ":day11_type" => $_day11_type,
                ":day12" => $_day12,
                ":day12_type" => $_day12_type,
                ":day13" => $_day13,
                ":day13_type" => $_day13_type,
                ":day14" => $_day14,
                ":day14_type" => $_day14_type,
                ":day15" => $_day15,
                ":day15_type" => $_day15_type,
                ":day16" => $_day16,
                ":day16_type" => $_day16_type,
                ":day17" => $_day17,
                ":day17_type" => $_day17_type,
                ":day18" => $_day18,
                ":day18_type" => $_day18_type,
                ":day19" => $_day19,
                ":day19_type" => $_day19_type,
                ":day20" => $_day20,
                ":day20_type" => $_day20_type,
                ":day21" => $_day21,
                ":day21_type" => $_day21_type,
                ":day22" => $_day22,
                ":day22_type" => $_day22_type,
                ":day23" => $_day23,
                ":day23_type" => $_day23_type,
                ":day24" => $_day24,
                ":day24_type" => $_day24_type
            );

            $this->execute($requete, $tabChamps);
        }

        public function calendarId($_email)
        {
            $requete = "SELECT joueur_id FROM joueurs WHERE joueur_email = :email";

            $tabChamps = array(
                ":email" => $_email
            );
            return $this->execute($requete, $tabChamps);
        }

        public function readCalendar($_id)
        {
            $requete = "SELECT * FROM `calendars` WHERE calendar_id = :id"; 
            $tabChamps = array(
                ":id" => $_id
            );
            return $this->execute($requete, $tabChamps);
        }

        public function infosCalendar($_userId)
        {
            $requete = "SELECT calendar_title, calendar_date, calendar_nbrofuser, calendar_layout, calendar_background,calendar_id FROM calendars WHERE calendar_userId = :userId";

            $tabChamps = array(
                ":userId" => $_userId
            );
            return $this->execute($requete, $tabChamps);
        }

        public function lastInsert()
        {
            $requete = "SELECT MAX(LAST_INSERT_ID(calendar_id))as 'dernier_id' FROM calendars";

            return $this->execute($requete);
        }


        public function updateDay($_idDay,$_message, $_typemessage, $_id)
        {
            $requete = "UPDATE calendars SET `calendar_".$_idDay."` = :dayMessage,`calendar_".$_idDay."_type` = :daytypeMessage WHERE calendar_id = :id ";
            $tabChamps= array(
                ":dayMessage" => $_message,
                ":daytypeMessage" => $_typemessage,
                ":id"=>$_id
            );

            return $this->execute($requete, $tabChamps);
        }

        public function deleteCalendar($_id)
        {
            $requete = "DELETE FROM `calendars` where `calendars`.`calendar_id`= :id";
            $tabChamps = array(
                ":id" => $_id
            );
            $this->execute($requete, $tabChamps);
        }
    }
?>