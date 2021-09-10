<?php

/** PHPExcel_IOFactory - библиотека для работы с Excel */
require_once get_stylesheet_directory() . '/inc/PHPExcel-1.8/Classes/PHPExcel.php';

define( 'EXCEL_FILES_DIR_IN', get_stylesheet_directory() . '/data/inputs/' );
define( 'EXCEL_FILES_DIR_OUT', get_stylesheet_directory() . '/data/outputs/' );

define( 'EXCEL_FILES_DIR_IN_URI', get_stylesheet_directory_uri() . '/data/inputs/' );
define( 'EXCEL_FILES_DIR_OUT_URI', get_stylesheet_directory_uri() . '/data/outputs/' );

define( 'LOGS_DIR', get_stylesheet_directory() . '/logs/' );


//******************************************************************************
//********************* выгрузка списка зарегистрированных ********************
//******************************************************************************

add_action('wp_ajax_excel_reglist', 'excel_reglist');
add_action('wp_ajax_nopriv_excel_reglist', 'excel_reglist');
function excel_reglist() {

    $objPHPExcel = new PHPExcel();

    $objPHPExcel->getProperties()->setCreator("НИИОЗММ")
                ->setLastModifiedBy("НИИОЗММ")
                ->setTitle("Список зарегистрированных на Соцфорум")
                ->setSubject("Список зарегистрированных на Соцфорум")
                ->setDescription("Список зарегистрированных на Соцфорум");

    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('B')->setWidth(40);
    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('C')->setWidth(20);
    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('D')->setWidth(35);
    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('E')->setWidth(40);
    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('F')->setWidth(35);
    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('G')->setWidth(45);
    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('H')->setWidth(45);
    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('I')->setWidth(25);
    $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('J')->setWidth(25);

    $objPHPExcel->setActiveSheetIndex(0)->getStyle("A1:J5000")->getAlignment()->setWrapText(true);

    $row = 3;
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValueByColumnAndRow(0, $row, '№ п.п.')
            ->setCellValueByColumnAndRow(1, $row, 'ФИО')
            ->setCellValueByColumnAndRow(2, $row, 'E-mail')
            ->setCellValueByColumnAndRow(3, $row, 'Дата')
;
    $row++;

    $args_regs = array(
        'post_type'      => 'registrations_2020',
        'post_status'    => 'publish',
        'posts_per_page'  => '-1',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'fields'         => 'ids'
    );

    $regs = new WP_Query( $args_regs );


    foreach ( $regs->posts as $nid ) {
        $fio = get_the_title($nid);
      //  $phone = get_post_meta( $nid, 'reg_phone', true );
       // $org = get_post_meta( $nid, 'reg_org', true );
        $email = get_post_meta( $nid, 'reg_email', true );
        $dt = get_the_date( 'd.m.Y', $nid );
//        $pos = get_post_meta( $nid, 'reg_position', true );
//        $s1 = get_post_meta( $nid, 'reg_section1', true );
//        $s2 = get_post_meta( $nid, 'reg_section2', true );

        $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValueByColumnAndRow(0, $row, $row-3)
            ->setCellValueByColumnAndRow(1, $row, $fio)
         //   ->setCellValueByColumnAndRow(2, $row, $phone)
            ->setCellValueByColumnAndRow(2, $row, $email )
            ->setCellValueByColumnAndRow(3, $row, $dt );
//            ->setCellValueByColumnAndRow(5, $row, $pos )
//            ->setCellValueByColumnAndRow(6, $row, $s1 )
//            ->setCellValueByColumnAndRow(7, $row, $s2);

        $row++;
    }

    $objPHPExcel->getActiveSheet()->setTitle('Список зарегистрированных');
    $objPHPExcel->setActiveSheetIndex(0);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    //$objWriter->save('php://output');

    $fn = 'socforum_reglist1.xlsx';
    $filename = EXCEL_FILES_DIR_OUT . $fn;


    $objWriter->save($filename);

    if ( file_exists( $filename ) ) {
        echo "<a href='" . EXCEL_FILES_DIR_OUT_URI . "{$fn}'>{$fn}</a>";
    } else {
        echo 'f'.$filename;
    }

    wp_die();
}
