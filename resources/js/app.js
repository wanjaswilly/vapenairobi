import * as Popper from "@popperjs/core"
window.Popper = Popper;

import jQuery from 'jquery';
window.$ = jQuery;

import 'bootstrap';

import * as mdb from 'mdb-ui-kit'; // lib
window.mdb = mdb;
document.querySelectorAll('.form-outline').forEach((formOutline) => {
    new mdb.Input(formOutline).init();
  });