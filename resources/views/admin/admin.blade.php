@extends('layouts.admin')
@section('content')
             <div class="content-w">
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-i">
            <div class="content-box">
             <div class="row">
                <div class="col-sm-12">
                  <div class="element-wrapper">
                    <h6 class="element-header">
                      Admin Master Dashboard
                    </h6>
                    <div class="element-content">
                      <div class="row">
                        <div class="col-sm-4">
                          <a class="element-box el-tablo" href="#">
                            <div class="label">
                              DATA CATIN MASTER
                            </div>
                            <div class="value">
                              {{ $jumlah_data_catin_master }}
                            </div>
                            <div class="trending trending-up-basic">
                              <span></span><i class=""></i>
                            </div>
                          </a>
                        </div>
<!--                         <div class="col-sm-4">
                          <a class="element-box el-tablo" href="#">
                            <div class="label">
                              DATA CATIN KUA
                            </div>
                            <div class="value">
                              23123
                            </div>
                            <div class="trending trending-down-basic">
                              <span></span><i class=""></i>
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-4">
                          <a class="element-box el-tablo" href="#">
                            <div class="label">
                               DATA CATIN PUSKESMAS
                            </div>
                            <div class="value">
                              125
                            </div>
                            <div class="trending trending-down-basic">
                              <span></span><i class=""></i>
                            </div>
                          </a>
                        </div>
                        <div class="col-sm-4">
                          <a class="element-box el-tablo" href="#">
                            <div class="label">
                               DATA CATIN BKKBN
                            </div>
                            <div class="value">
                              125
                            </div>
                            <div class="trending trending-down-basic">
                              <span></span><i class=""></i>
                            </div>
                          </a>
                        </div> -->
<!--                         <div class="col-sm-4">
                          <a class="element-box el-tablo" href="#">
                            <div class="label">
                               DATA CATIN SIAP NIKAH
                            </div>
                            <div class="value">
                              125
                            </div>
                            <div class="trending trending-down-basic">
                              <span></span><i class=""></i>
                            </div>
                          </a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection