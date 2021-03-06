<section class="agent-public-information-unit">
    <div class="agent-public-information-head">掲載情報</div>
    <div class="agent-public-information-table-box">
    <div class="agent-public-information-table-in-box">
        <table class="agent-public-information-table">
            <?php
            $agent_public_information_stmt=$db->query("select agent_name,agent_meeting_type,agent_main_corporate_size,agent_corporate_type,agent_job_offer_rate,agent_shortest_period,agent_recommend_student_type from agent_public_information where agent_id=".$_SESSION['agent_id'].";");
            $agent_public_information_array=$agent_public_information_stmt->fetchAll()[0];
            $agent_address_stmt=$db->query("select agent_prefecture from agent_address where agent_id=".$_SESSION['agent_id'].";");
            $agent_address=$agent_address_stmt->fetchAll();
            $sales_copy_stmt=$db->query("select sales_copy from sales_copy where agent_id=".$_SESSION['agent_id'].";");
            $sales_copy=$sales_copy_stmt->fetchAll()[0];
            $corporate_amount_stmt=$db->query("select manufacturer,retail,service,software_transmission,trading,finance,media,government from agent_corporate_amount where agent_id=".$_SESSION['agent_id'].";");
            $corporate_amount=$corporate_amount_stmt->fetchAll()[0];
            $agent_picture_stmt=$db->query("select picture_url from picture where agent_id=".$_SESSION['agent_id'].";");
            $agent_picture=$agent_picture_stmt->fetchAll()[0]['picture_url'];
            foreach ($agent_public_information_array as $column => $data) {
                $column=$translate->translate_column_to_japanese($column);
                $data=$translate->translate_data_to_japanese($column,$data);
                echo '<tr>';
                echo '<th class="agent-public-information-table-text">' . $column . '</th><td class="agent-public-information-table-content">' . $data . '</td>';
                echo '</tr>';
            }
            echo '<tr>';
            echo '<th class="agent-public-information-table-text">拠点地</th>';
            echo '<td class="agent-public-information-table-content">';
            for($index=0;$index<=count($agent_address)-1;$index++){
                if($index==count($agent_address)-1){
                    echo $agent_address[$index]['agent_prefecture'];
                }else{
                    echo $agent_address[$index]['agent_prefecture'].',';
                }
            }
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th class="agent-public-information-table-text">キャッチコピー</th>';
            echo '<td class="agent-public-information-table-content">'.$sales_copy['sales_copy'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th class="agent-public-information-table-text">業界別取り扱い企業数</th>';
            echo '<td class="agent-public-information-table-content">';
            $index=0;
            foreach($corporate_amount as $column=>$data){
                $column=$translate->translate_column_to_japanese($column);
                if($index==count($corporate_amount)-1){
                    echo $column.'('.$data.')';
                }else{
                    echo $column.'('.$data.'),';
                }
                $index++;
            }
            echo '</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th class="agent-public-information-table-text">画像</th>';
            echo '<td class="agent-public-information-table-content"><img style="width:100%;height:100%;" src="../../img/article/'.$agent_picture.'" alt="'.$agent_public_information_array['agent_name'].'の画像"></td>';
            echo '</tr>';
            ?>
        </table>
    </div>
    </div>

</section>