<?php

 if (isset($_GET['lang'])) {
     $set_lang=$_GET['lang'];
  }else{
    $set_lang='en';
  }



  $lang=array();

if ($set_lang=='en') {
  
   $lang['lang']='Language';
  $lang['admin']='ADMIN PANEL';
  $lang['dash']='DASHBOARD';
  $lang['user']='USERS';
  $lang['trip']='Trips';
  $lang['pays']='Payments';
  $lang['s_dash']='Dashboard';
  $lang['rev']='Reviews';
  $lang['cont']='Contact';
  $lang['cht']='Chat';
  $lang['s_dash']='Dashboard';
  $lang['tang']='Users';
  $lang['trips']='Trips';
  $lang['confirm']='Confirmed trips';
  $lang['name']='MONIKA DOGRA';
  $lang['super']='Super Admin';
  $lang['traf']='Traffic';
  $lang['recent']='NEW TRIPS';
  $lang['t_title']='Trips Title';
  $lang['dat']='Date';
  $lang['status']='Status';
  $lang['see']='See All';
  $lang['new']='NEW USERS';
  $lang['mem']='Members';
  $lang['nam']='Name';
  $lang['acc_v']='Date';
  $lang['det']='Details';
  $lang['int']='Interest';
  $lang ['users_d']='USERS DETAILS';
  $lang ['email']='Email';
  $lang ['gen']='Gender';
  $lang ['phone']='Phone no.';
  $lang ['alt']='Alt P_no.';
  $lang ['add']='Address';
  $lang ['zip']='Zipcode';
  $lang ['verf']='Verification';
  $lang ['del']='delete';
  $lang['trans']='TRANSACTIONS';
   $lang ['trans_d']='TRANSACTION DETAILS';
   $lang['trip_n']='Trip name';
   $lang['fee']='Fee';
   $lang['p_memb']='Paid member';
   $lang['opera']='Operation';
   $lang['see_m']='see more';
   $lang['trip_d']='TRIPS DETAILS';
   $lang ['sch']='SCHEDULE';
   $lang ['vid']='VIDEO';
   $lang ['detl']='DETAILS';
   $lang ['vaish']='VAISHNO DEVI';
   $lang ['pick']='Pickup Address';
   $lang ['arr_t']='Arrival Time';
   $lang ['fr']='From';
   $lang ['to']='To';
   $lang ['dest']='Destination';
   $lang ['fe_per']='Fee/Person';
   $lang ['stay']='Stay';
   $lang ['pos']='Post on';
   $lang ['note']='Note';
   $lang ['up']='UPDATE'; 
   $lang ['pay']='PAYMENT';
  $lang ['pay_s']='Payment Status';
  $lang ['book']='BOOKING';
  $lang ['chrg']='CHARGE';
  $lang ['named']='NAME';
  $lang ['pay_md']='PAY_MODE';
  $lang ['conf']='Confirm';
  $lang ['rem']='Reminder';
  $lang ['stat']='Status';
  $lang ['all']='All';
  $lang ['pad']='Paid';
  $lang ['u_pad']='Unpaid';
  $lang ['rev_w']='REVIEWS';
  $lang ['user_rev']='USER REVIEWS';
  $lang ['chtt']='CHAT';
  $lang ['oper']='OPERATION';
  $lang ['trip_nm']='TRIP NAME';
  $lang ['total_rv']='TOTAL REVIEWS';
  $lang ['c_trip']='TRIPS';
   $lang ['contt']='CONTACT';
   $lang['user_i']='USER ISSUES';
   $lang ['mail']='EMAIL_ID';
   $lang ['qur']='Query';
   $lang ['mal']='MAIL';
   $lang ['delt']='DELETE';
   $lang ['prev']='Previous';
   $lang ['th_mn']='This month';
   $lang ['add_tr']='ADD TRIP';
   $lang ['re_da']='REG_DATE';
   $lang['disap']='DISAPPROVAL';
   $lang['earn']='Earning';
  $lang['trip_his']='TRIP HISTORY';
  $lang['new-tr']='NEW TRIPS';
  $lang['notify']='NOTIFICATION';
  $lang['trip_notify']=' TRIP NOTIFICATION';
  $lang['last_da']='LAST DATE';
  $lang['noti']='NOTIFY';
  $lang['trans_his_det']='TRANSACTION HISTORY DETAILS';
  $lang['chng_pswd']='CHANGE PASSWORD';
  $lang['chnge_pswd']='Change Password';
  $lang['chng']='Change';
  $lang['add_n_tr']='ADD NEW TRIP';
  $lang['new_tr_det']='NEW TRIPS TRANSACTION DETAILS';
  $lang['group']='Group Size';
  $lang['book_lim']='Booking Limit';
  $lang['map']='Map';
  $lang['add']='ADD';
  $lang['pay_his']='Payment History';
  $lang['new_pay']='New Payment';
  $lang['log']='Logout';
  $lang['user_int']='USER INTEREST';
  $lang['delt_sav']='details saved!!';
  $lang['delt_false']='Error: details not saved!!';
  $lang['ins_suc']='Inserted Successfully!!';
  $lang['text_3']='Weekend Trip Updated Successfully!!';
  $lang['text_4']='Not Updated';
  $lang['text_5']='Email not registerd';
  $lang['text_6']='Password  changed successfully!!';
  $lang['text_7']='Weekend Trip Inserted Successfully!!';
  $lang['text-8']='Not Inserted!!';
  $lang['text_9']='Schedule Inserted Successfully!!';
  $lang['text_10']='Image Inserted Successfully!!';
  $lang['lang']='language';
  $lang['profile']='Profile';
  $lang['save']='SAVE';
  $lang['sol']='Solution';
  $lang['no_review']='No Reviews Yet!!';
  $lang['not_booked']='No user has booked this weekend plan so far';
  $lang['data_not_found']='No data available';
  $lang['no_plans']='No weekend plans available';
  $lang['trip_sch']='TRIP SCHEDULE';
   $lang['loc']='LOCATION/TIME';
   $lang['event']='EVENT';
   $lang['add_sch']='ADD SCHEDULE';
   $lang['add_gal']='ADD GALLERY';
   $lang['img']=' IMAGE';
   $lang['mail_again']='Mail Again';
    $lang['txt91']='Password not fetched!!';
    $lang['pswd_not_change']='Error: Password not changed!!';
   $lang['confirm_not_match']='Confirm password is not match!!';
   $lang['txt95']='Incorrect old password!!';
   $lang['mail_send']='Mail sended successfully!!';
   $lang['not_send_mail']='Mail not send';
   $lang['not_provided']='Not Provided!!';
   $lang['f_name']='Enter First Name*';
   $lang['l_name']='Enter Last Name';

}
  elseif ($set_lang=='hi') {
  $lang['lang']='????????????';
  $lang['admin']='?????????????????????????????? ????????????';
  $lang['dash']='????????????????????????';
  $lang['user']='????????????????????????????????????';
  $lang['trip']='?????????????????????';
  $lang['pays']='??????????????????';
  $lang['s_dash']='????????????????????????';
  $lang['rev']='?????????????????????';
  $lang['cont']='?????????????????? ????????????';
  $lang['cht']='??????????????????';
  $lang['s_dash']='????????????????????????';
  $lang['tang']='????????????????????????????????????';
  $lang['trips']='?????????????????????';
  $lang['confirm']='??????????????? ????????????????????????';
  $lang['name']='?????????????????? ???????????????';
  $lang['super']='???????????? ???????????????';
  $lang['traf']='?????????????????????';
  $lang['recent']=' ?????? ????????????????????????';
  $lang['t_title']='?????????????????? ?????? ??????????????????';
  $lang['dat']='???????????????';
  $lang['status']='??????????????????';
  $lang['see']='????????? ???????????????';
  $lang['new']='?????? ??????????????????????????????';
  $lang['mem']='?????????????????????';
  $lang['nam']='?????????';
  $lang['acc_v']='???????????? ???????????????????????? ????????????';
  $lang['det']='???????????????';
    $lang['int']='????????????';
   $lang ['users_d']='?????????????????????????????? ???????????????';
   $lang ['email']='????????????';
   $lang ['gen']='????????????';
    $lang ['phone']='????????? ????????????';
    $lang ['alt']='???????????? ????????? ????????????';
    $lang ['add']='?????????';
    $lang ['zip']='???????????? ?????????';
    $lang ['verf']='?????????????????????';
   $lang ['del']='???????????????';
   $lang['trans']='??????????????????';
   $lang ['trans_d']='?????????????????? ?????? ???????????????';
   $lang['trip_n']='?????????????????? ?????? ?????????';
   $lang['fee']='???????????????';
   $lang['p_memb']='?????????????????? ???????????????';
   $lang['opera']='??????????????????';
   $lang['see_m']='?????? ???????????????';
   $lang['trip_d']='?????????????????? ???????????????';
   $lang ['sch']='?????????????????????';
   $lang ['vid']='??????????????????';
   $lang ['detl']='???????????????';
   $lang ['vaish']='?????????????????? ????????????';
   $lang ['pick']='????????? ???????????????';
   $lang ['arr_t']='????????? ?????? ?????????';
   $lang ['fr']='????????????????????? ????????????';
   $lang ['to']='??????????????? ????????????';
   $lang ['dest']='??????????????????';
   $lang ['fe_per']='???????????????/?????????????????????';
   $lang ['stay']='????????????';
   $lang ['pos']='??????????????? ??????';
   $lang ['note']='??????????????? ?????????';
   $lang ['up']='??????????????? ????????????';
   $lang ['pay']='??????????????????';
  $lang ['pay_s']='?????????????????? ?????? ??????????????????';
  $lang ['book']='??????????????????';
  $lang ['chrg']='???????????????';
  $lang ['named']='?????????';
  $lang ['pay_md']='?????????????????? ?????????';
  $lang ['conf']='?????????????????? ????????????';
  $lang ['rem']='???????????????????????????';
  $lang ['stat']='??????????????????';
  $lang ['all']='??????';
  $lang ['pad']='?????????????????? ???????????? ??????';
  $lang ['u_pad']='?????????????????????';
  $lang ['rev_w']='?????????????????????';
  $lang ['user_rev']='?????????????????????????????? ?????????????????????';
     $lang ['chtt']='??????????????????';
     $lang ['oper']='??????????????????';
     $lang ['trip_nm']='?????????????????? ?????? ?????????';
     $lang ['total_rv']='????????? ?????????????????????';
     $lang ['c_trip']='?????????????????????';
     $lang ['contt']='?????????????????? ????????????';
   $lang['user_i']='?????????????????????????????? ??????????????????';
   $lang ['mail']='???????????? ????????????';
   $lang ['qur']='????????????';
   $lang ['mal']='?????????';
   $lang ['delt']='??????????????? ';
   $lang ['prev']='???????????????';
   $lang ['th_mn']='?????? ???????????????';
    $lang ['add_tr']='?????????????????? ??????????????????';
      $lang ['re_da']='????????????????????? ????????????';
      $lang['disap']='??????????????????????????????';
      $lang['earn']='????????????';
      $lang['trip_his']='?????????????????? ?????? ?????????????????? ';
  $lang['new-tr'] ='?????? ????????????????????????';
  $lang['notify']='????????????????????????';
  $lang['trip_notify']=' ?????????????????? ???????????????????????? ';
  $lang['last_da']='??????????????? ????????????';
  $lang['noti']='???????????????????????? ????????????';
  $lang['trans_his_det']='?????????-????????? ?????????????????? ???????????????';
  $lang['chng_pswd']='????????????????????? ???????????????';
    $lang['chnge_pswd']='????????????????????? ???????????????';
    $lang['chng']='???????????????';
    $lang['add_n_tr']='?????? ?????????????????? ??????????????????';
    $lang['new_tr_det']='?????? ???????????????????????? ?????????????????? ???????????????';
     $lang['group']='???????????? ????????????';
     $lang['book_lim']='?????????????????? ???????????? ';
     $lang['map']='???????????????';
     $lang['add']='??????????????????';
     $lang['pay_his']=' ?????????????????? ??????????????????';
     $lang['new_pay']='????????? ??????????????????';
      $lang['log']='?????????????????? ';
      $lang['user_int']='???????????????????????? ????????????';
      $lang['delt_sav']='??????????????? ???????????????!!';
      $lang['delt_false']='??????????????????: ??????????????? ??????????????? ????????????!!';
      $lang['ins_suc']='????????????????????????????????? ????????????!!';
      $lang['text_1']='??????????????? ???????????? ???????????? ???????????? ?????? ???????????????????????? ???????????????!!';
      $lang['text_2']='?????????????????? ????????????/?????????????????????!!';
      $lang['text_3']='??????????????????????????? ?????????????????? ????????????????????????????????? ??????????????????!';
      $lang['text_4']='??????????????? ???????????? ???????????? ?????????';
      $lang['text_5']='???????????? ????????????????????? ????????????';
  $lang['text_6']='????????????????????? ????????????????????????????????? ????????? ?????????!!';
  $lang['text_7']='??????????????????????????? ?????????????????? ????????????????????????????????? ????????????!';
  $lang['text-8']='???????????? ????????????!!';
  $lang['text_9']='????????????????????? ????????????????????????????????? ????????????!!';
  $lang['text_10']='??????????????? ????????????????????????????????? ????????????!!';
  $lang['lang']='????????????';
  $lang['profile']='????????????????????????';
  $lang['save']='??????????????????';
  $lang['sol']='??????????????????';  
  $lang['no_review']='????????? ?????? ????????? ????????????????????? ????????????!!';
  $lang['not_booked']='????????? ?????? ???????????? ????????????????????????????????? ?????? ?????? ????????????????????? ??????????????? ?????? ?????????????????? ???????????? ?????? ??????';
  $lang['data_not_found']='????????? ???????????? ???????????? ????????????';
  $lang['no_plans']='????????? ??????????????????????????? ??????????????? ?????????????????? ???????????? ??????';
   $lang['trip_sch']='??????????????? ?????????????????????';
   $lang['loc']='???????????????/?????????';
   $lang['event']='???????????????';
   $lang['add_sch']=' ????????????????????? ??????????????????';
   $lang['add_gal']='??????????????? ??????????????????';
   $lang['img']='??????????????????';
   $lang['mail_again']='?????????  ????????? ????????????';
   $lang['txt91']='????????????????????? ????????? ???????????????!!';
   $lang['pswd_not_change']='?????????????????????: ????????????????????? ???????????? ????????????';
   $lang['confirm_not_match']='?????????????????? ????????????????????? ????????? ???????????? ??????.';
   $lang['txt95']='????????? ?????????????????? ?????????????????????!!';
   $lang['mail_send']='????????? ????????????????????????????????? ????????????';
   $lang['not_send_mail']='????????? ???????????? ????????????';
   $lang['not_provided']='?????????????????? ???????????? ????????????!!';
   $lang['f_name']='??????????????? ????????? ???????????? ????????????*';
   $lang['l_name']='??????????????? ????????? ???????????? ?????????';

}
else{
  $lang['lang']='????????';
   $lang['admin']='?????????? ????????';
  $lang['dash']='?????? ????????';
  $lang['user']='????????????';
  $lang['trip']='??????';
  $lang['pays']='??????????????';
  $lang['s_dash']='?????? ????????';
  $lang['rev']='??????????';
  $lang['cont']='??????????';
  $lang['cht']='??????';
   $lang['s_dash']='?????? ????????';
  $lang['tang']='????????????';
  $lang['trips']='????????';
  $lang['confirm']='?????????? ?????? ????????';
  $lang['name']='???????????? ??????????';
  $lang['super']='?????? ??????????';
  $lang['traf']='??????????';
  $lang['recent']=' ?????? ????????';
  $lang['t_title']='???????? ??????????';
  $lang['dat']='??????????';
  $lang['status']='????????';
  $lang['see']='???????? ????????????';
  $lang['new']='?????? ?????????????? ??????????';
  $lang['mem']='????????????';
  $lang['nam']='??????';
  $lang['acc_v']='???????????? ???? ??????????';
   $lang['det']='??????????????';
      $lang['int']='??????';
      $lang ['users_d']='???????? ???? ??????????????';
      $lang ['email']='???? ??????';
      $lang ['gen']='??????';
      $lang ['phone']='?????? ????????';
      $lang ['alt']='ALT ?????? ????????';
      $lang ['add']='??????';
      $lang ['zip']='???? ??????';
      $lang ['verf']='??????????';
      $lang ['del']='?????? ????????';
      $lang['trans']='?????? ??????';
   $lang ['trans_d']='?????? ?????? ???? ??????????????';
   $lang['trip_n']='?????? ??????';
   $lang['fee']='??????';
   $lang['p_memb']='?????? ?????? ????????????';
   $lang['opera']='??????????????';
   $lang['see_m']='???????????? ????????';
   $lang['trip_d']='?????? ???? ??????????????';
   $lang ['sch']='??????????';
   $lang ['vid']='??????????';
   $lang ['detl']='??????????????';
   $lang ['vaish']='???????? ????????';
   $lang ['pick']='???????? ??????';
   $lang ['arr_t']='?????? ???? ??????';
   $lang ['fr']='?????????? ????????';
   $lang ['to']='???????? ??????????';
   $lang ['dest']='??????????s';
   $lang ['fe_per']='?????? / ??????';
   $lang ['stay']='????????????';
   $lang ['pos']='???????? ????';
   $lang ['note']='??????';
   $lang ['up']='???? ??????'; 
   $lang ['pay']='??????????????';
  $lang ['pay_s']='?????????????? ???? ??????????';
  $lang ['book']='????????';
  $lang ['chrg']='????????';
  $lang ['named']='??????';
  $lang ['pay_md']='???? ??????';
  $lang ['conf']='?????????? ????????';
  $lang ['rem']='?????? ??????????';
   $lang ['stat']='????????';
   $lang ['all']='????';
   $lang ['pad']='?????? ??????';
   $lang ['u_pad']='?????? ????????????';
    $lang ['rev_w']='??????????';
     $lang ['user_rev']='????????_????????????';
     $lang ['chtt']='??????';
     $lang ['oper']='????????????';
     $lang ['trip_nm']='?????? ??????';
     $lang ['total_rv']='???? ??????????';
     $lang ['c_trip']='????????';
     $lang ['contt']='??????????';
   $lang['user_i']='???????????? ???? ????????';
   $lang ['mail']='???? ?????? ???? ??????';
   $lang ['qur']='??????????????';
   $lang ['mal']='??????';
   $lang ['delt']='?????? ????????';
   $lang ['prev']='??????????';
   $lang ['th_mn']='???? ??????????';
    $lang ['add_tr']='?????? ???????? ????????';
     $lang ['re_da']='???????????????? ???? ??????????';
     $lang['disap']='????????????';
     $lang['earn']='??????';
     $lang['trip_his']='?????? ???? ?????????? ';
    $lang['new-tr'] ='?????? ????????';
    $lang['notify']='??????????';
    $lang['trip_notify']=' ?????? ???? ?????????????????? ';
    $lang['last_da']='???????? ??????????';
    $lang['noti']='?????????? ????????';
    $lang['trans_his_det']='?????? ?????? ???? ?????????? ???? ??????????????  ';
    $lang['chng_pswd']='?????? ?????? ?????????? ????????';
      $lang['chnge_pswd']='?????? ?????? ?????????? ????????';
      $lang['chng']='????????????';
      $lang['add_n_tr']='?????? ?????? ???????? ????????';
      $lang['new_tr_det']='?????? ???????? ?????????????????? ???? ??????????????   ';
       $lang['group']='?????????? ????????';
       $lang['book_lim']='???????? ???? ????';
       $lang['map']='????????';
       $lang['add']='??????????';
       $lang['pay_his']='?????????????? ???? ??????????';
   $lang['new_pay']='?????? ??????????????';
    $lang['log']='?????? ?????? ';
    $lang['user_int']='';
    $lang['delt_sav']='?????????????? ??????????!!';
    $lang['delt_false']='??????: ?????????????? ?????????? ???????? ???? ????????!!';
    $lang['ins_suc']='?????????????? ???? ???????? ?????? ??????!!';
    $lang['text_1']='???????? ?????? ???????? ???????? ???? ?????? ???? ?????????? ????????.!!';
    $lang['text_2']='???????????? ???? ??????/ ?????? ??????!!';
    $lang['text_3']='???????? ???? ?????? ?????? ?????? ?????????????? ???? ???? ??????!!';
    $lang['text_4']='???????? ???????? ???????? ???? ??????';
    $lang['text_5']='???? ?????? ?????????? ???????? ?????? ??????';
  $lang['text_6']='?????? ?????? ?????????????? ???? ?????????? ???? ??????!!';
  $lang['text_7']='?????? ???????? ?????? ?????????????? ???? ???????? ?????? ??????!!';
  $lang['text-8']='???????? ???????? ?????? ??????!!';
  $lang['text_9']='?????????????? ???? ???????? ???????? ??????????!!';
  $lang['text_10']='?????????? ?????????????? ???? ???????? ???? ??????!!';
  $lang['lang']='????????';
  $lang['profile']=' ??????????????';
  $lang['save']='??????????';
  $lang['sol']='????';
  $lang['no_review']='???????? ???? ???????? ?????????? ????????!!';
  $lang['not_booked']='???????? ???? ?????? ???????? ???? ???? ???????????? ?????????? ???? ???????? ???? ????';
  $lang['data_not_found']='???????? ???????? ???????? ??????';
  $lang['no_plans']='???????? ???????? ???? ?????? ?????? ???????????? ????????????';
  $lang['trip_sch']='?????? ???? ??????????';
  $lang['loc']='?????? ????????/??????';
  $lang['event']='  ??????????';
  $lang['add_sch']='  ?????????? ?????????? ????????';
  $lang['add_gal']='?????????? ???????? ????????';
  $lang['img']='?????????? ';
  $lang['mail_again']='?????? ??????';
   $lang['txt91']='?????? ?????? ???????? ??????!!';
    $lang['pswd_not_change']='??????: ?????? ?????? ?????????? ???????? ?????? ??????';
   $lang['confirm_not_match']='?????? ?????? ?????????? ???? ???????? ???? ?????????? ??????????';
   $lang['txt95']='?????? ?????????? ?????? ??????!!';
   $lang['mail_send']='?????? ?????????????? ???? ??????';
   $lang['not_send_mail']='?????? ???????? ????????????';
   $lang['not_provided']='?????????? ???????? ???? ??????!!';
   $lang['f_name']='???????? ?????? ?????? ???????? *';
   $lang['l_name']='???????? ?????? ?????? ????????';

}
    
      
  
