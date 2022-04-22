@extends('admin.layout.master')
@section('content')
	<div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-12">
                        <h3 class="page-title">Welcome Admin!</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-users"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>429</h3>
                                    <h6 class="text-muted">Users</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                   <i class="fas fa-archive"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>148</h3>
                                    <h6 class="text-muted">Products</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fas fa-truck"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>124</h3>
                                    <h6 class="text-muted">Orders</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                   <i class="fas fa-cog"></i>
                                </span>
                                <div class="dash-widget-info">
                                    <h3>1378</h3>
                                    <h6 class="text-muted">Services</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Recent Orders -->
                <div class="col-md-12">
                    <div class="card card-table">
                        <div class="card-header">
                            <h4 class="card-title">Recent Orders</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center">
                                    <thead>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Order ID</th>
                                            <th>Product/Services</th>
                                            <th>Customer Name</th>
                                            <th>Seller Name</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap"> 1 </td>
                                            <td class="text-nowrap"> #2463 </td>
                                            <td> Quest 2 Headset </td>
                                            <td> John Smith </td>
                                            <td> Michel Joe </td>
                                            <td> <div class="font-weight-600">$71</div> </td>
                                            <td>
                                                <a href="#" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye mr-1"></i> View 
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> 2 </td>
                                            <td class="text-nowrap"> #2463 </td>
                                            <td> Quest 2 Headset </td>
                                            <td> John Smith </td>
                                            <td> Michel Joe </td>
                                            <td> <div class="font-weight-600">$71</div> </td>
                                            <td>
                                                <a href="#" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye mr-1"></i> View 
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> 3 </td>
                                            <td class="text-nowrap"> #2463 </td>
                                            <td> Quest 2 Headset </td>
                                            <td> John Smith </td>
                                            <td> Michel Joe </td>
                                            <td> <div class="font-weight-600">$71</div> </td>
                                            <td>
                                                <a href="#" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye mr-1"></i> View 
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> 4 </td>
                                            <td class="text-nowrap"> #2463 </td>
                                            <td> Quest 2 Headset </td>
                                            <td> John Smith </td>
                                            <td> Michel Joe </td>
                                            <td> <div class="font-weight-600">$71</div> </td>
                                            <td>
                                                <a href="#" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye mr-1"></i> View 
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap"> 5 </td>
                                            <td class="text-nowrap"> #2463 </td>
                                            <td> Quest 2 Headset </td>
                                            <td> John Smith </td>
                                            <td> Michel Joe </td>
                                            <td> <div class="font-weight-600">$71</div> </td>
                                            <td>
                                                <a href="#" class="btn btn-sm bg-info-light">
                                                    <i class="far fa-eye mr-1"></i> View 
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Of Recent Orders -->               

                <!-- Products -->
                <div class="col-md-12">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            <h4 class="card-title">Sales Revenue</h4>
                        </div>
                        <div class="card-body p-4">
                            <div id="sales" style="min-height: 415px;"><div id="apexchartsedyd0vzl" class="apexcharts-canvas apexchartsedyd0vzl apexcharts-theme-light" style="width: 941px; height: 400px;"><svg id="SvgjsSvg2124" width="941" height="400" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2126" class="apexcharts-inner apexcharts-graphical" transform="translate(45.359375, 30)"><defs id="SvgjsDefs2125"><clipPath id="gridRectMaskedyd0vzl"><rect id="SvgjsRect2132" width="882.8017578125" height="337.348" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskedyd0vzl"></clipPath><clipPath id="nonForecastMaskedyd0vzl"></clipPath><clipPath id="gridRectMarkerMaskedyd0vzl"><rect id="SvgjsRect2133" width="877.8017578125" height="336.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine2131" x1="0" y1="0" x2="0" y2="332.348" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="332.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2139" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2140" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText2142" font-family="Helvetica, Arial, sans-serif" x="0" y="361.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2143">Jan</tspan><title>Jan</title></text><text id="SvgjsText2145" font-family="Helvetica, Arial, sans-serif" x="109.2252197265625" y="361.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2146">Feb</tspan><title>Feb</title></text><text id="SvgjsText2148" font-family="Helvetica, Arial, sans-serif" x="218.450439453125" y="361.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2149">Mar</tspan><title>Mar</title></text><text id="SvgjsText2151" font-family="Helvetica, Arial, sans-serif" x="327.6756591796875" y="361.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2152">Apr</tspan><title>Apr</title></text><text id="SvgjsText2154" font-family="Helvetica, Arial, sans-serif" x="436.90087890625" y="361.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2155">May</tspan><title>May</title></text><text id="SvgjsText2157" font-family="Helvetica, Arial, sans-serif" x="546.1260986328125" y="361.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2158">Jun</tspan><title>Jun</title></text><text id="SvgjsText2160" font-family="Helvetica, Arial, sans-serif" x="655.351318359375" y="361.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2161">Jul</tspan><title>Jul</title></text><text id="SvgjsText2163" font-family="Helvetica, Arial, sans-serif" x="764.5765380859375" y="361.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2164">Aug</tspan><title>Aug</title></text><text id="SvgjsText2166" font-family="Helvetica, Arial, sans-serif" x="873.8017578125" y="361.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2167">Sep</tspan><title>Sep</title></text></g><line id="SvgjsLine2168" x1="0" y1="333.348" x2="873.8017578125" y2="333.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG2183" class="apexcharts-grid"><g id="SvgjsG2184" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine2195" x1="0" y1="0" x2="873.8017578125" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2196" x1="0" y1="66.4696" x2="873.8017578125" y2="66.4696" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2197" x1="0" y1="132.9392" x2="873.8017578125" y2="132.9392" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2198" x1="0" y1="199.40879999999999" x2="873.8017578125" y2="199.40879999999999" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2199" x1="0" y1="265.8784" x2="873.8017578125" y2="265.8784" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine2200" x1="0" y1="332.348" x2="873.8017578125" y2="332.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG2185" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine2186" x1="0" y1="333.348" x2="0" y2="339.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2187" x1="109.2252197265625" y1="333.348" x2="109.2252197265625" y2="339.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2188" x1="218.450439453125" y1="333.348" x2="218.450439453125" y2="339.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2189" x1="327.6756591796875" y1="333.348" x2="327.6756591796875" y2="339.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2190" x1="436.90087890625" y1="333.348" x2="436.90087890625" y2="339.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2191" x1="546.1260986328125" y1="333.348" x2="546.1260986328125" y2="339.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2192" x1="655.351318359375" y1="333.348" x2="655.351318359375" y2="339.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2193" x1="764.5765380859375" y1="333.348" x2="764.5765380859375" y2="339.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2194" x1="873.8017578125" y1="333.348" x2="873.8017578125" y2="339.348" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><rect id="SvgjsRect2201" width="873.8017578125" height="66.4696" x="0" y="0" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMaskedyd0vzl)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect2202" width="873.8017578125" height="66.4696" x="0" y="66.4696" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskedyd0vzl)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect2203" width="873.8017578125" height="66.4696" x="0" y="132.9392" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMaskedyd0vzl)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect2204" width="873.8017578125" height="66.4696" x="0" y="199.40879999999999" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="transparent" clip-path="url(#gridRectMaskedyd0vzl)" class="apexcharts-grid-row"></rect><rect id="SvgjsRect2205" width="873.8017578125" height="66.4696" x="0" y="265.8784" rx="0" ry="0" opacity="0.5" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#f3f3f3" clip-path="url(#gridRectMaskedyd0vzl)" class="apexcharts-grid-row"></rect><line id="SvgjsLine2207" x1="0" y1="332.348" x2="873.8017578125" y2="332.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine2206" x1="0" y1="1" x2="0" y2="332.348" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG2134" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2135" class="apexcharts-series" seriesName="SALES" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2138" d="M 0 310.19146666666666L 109.2252197265625 241.50621333333333L 218.450439453125 254.80013333333335L 327.6756591796875 219.34968L 436.90087890625 223.78098666666668L 546.1260986328125 194.97749333333334L 655.351318359375 179.46792L 764.5765380859375 130.72354666666666L 873.8017578125 4.431306666666671" fill="none" fill-opacity="1" stroke="rgba(14,72,180,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskedyd0vzl)" pathTo="M 0 310.19146666666666L 109.2252197265625 241.50621333333333L 218.450439453125 254.80013333333335L 327.6756591796875 219.34968L 436.90087890625 223.78098666666668L 546.1260986328125 194.97749333333334L 655.351318359375 179.46792L 764.5765380859375 130.72354666666666L 873.8017578125 4.431306666666671" pathFrom="M -1 332.348L -1 332.348L 109.2252197265625 332.348L 218.450439453125 332.348L 327.6756591796875 332.348L 436.90087890625 332.348L 546.1260986328125 332.348L 655.351318359375 332.348L 764.5765380859375 332.348L 873.8017578125 332.348"></path><g id="SvgjsG2136" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2213" r="0" cx="0" cy="0" class="apexcharts-marker wcudpsy4k no-pointer-events" stroke="#ffffff" fill="#008ffb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2137" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2208" x1="0" y1="0" x2="873.8017578125" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2209" x1="0" y1="0" x2="873.8017578125" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2210" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2211" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2212" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2130" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG2169" class="apexcharts-yaxis" rel="0" transform="translate(15.359375, 0)"><g id="SvgjsG2170" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2171" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2172">150</tspan><title>150</title></text><text id="SvgjsText2173" font-family="Helvetica, Arial, sans-serif" x="20" y="97.9696" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2174">120</tspan><title>120</title></text><text id="SvgjsText2175" font-family="Helvetica, Arial, sans-serif" x="20" y="164.4392" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2176">90</tspan><title>90</title></text><text id="SvgjsText2177" font-family="Helvetica, Arial, sans-serif" x="20" y="230.90879999999999" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2178">60</tspan><title>60</title></text><text id="SvgjsText2179" font-family="Helvetica, Arial, sans-serif" x="20" y="297.3784" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2180">30</tspan><title>30</title></text><text id="SvgjsText2181" font-family="Helvetica, Arial, sans-serif" x="20" y="363.848" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan2182">0</tspan><title>0</title></text></g></g><g id="SvgjsG2127" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 200px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div><div class="apexcharts-toolbar" style="top: 0px; right: 3px;"><div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></div><div class="apexcharts-menu"><div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div><div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div><div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div></div></div></div></div>
                        </div>
                    </div>
                </div>
                <!-- End Of Products -->
            </div>
        </div>
    </div>
@endsection