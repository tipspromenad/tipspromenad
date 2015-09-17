<?php
/**
 * Frontend Controllers
 */

post('/skapa/tipspromenad', 'SkapaTipspromenadController@store');

get('tipspromenad/redigera/{tipsId}/{slug}/{unique_hash_id?}', 'SkapaTipspromenadController@edit');

/**
 * API for Ajax
 */
post('tipspromenad/visa-inte-hjalp-igen', 'SkapaTipspromenadController@dontShowHelpAgain');
post('tipspromenad/ordning-fragor', 'SkapaTipspromenadController@setOrderOfQuestions');
post('tipspromenad/save-and-sync-selected-questions', 'SkapaTipspromenadController@saveAndSyncSelectedQuestions');

get('tipspromenad/vuejs/selectedQuestions/{tipsID}', 'SkapaTipspromenadController@getSelectedQuestions');
get('tipspromenad/vuejs/orderOfQuestions/{tipsID}', 'SkapaTipspromenadController@getOrderOfQuestions');
get('tipspromenad/vuejs/all/questions/{tipsID}', 'SkapaTipspromenadController@getAllQuestions');


