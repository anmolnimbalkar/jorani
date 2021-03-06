<?php
/*
 * This file is part of Jorani.
 *
 * Jorani is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jorani is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jorani.  If not, see <http://www.gnu.org/licenses/>.
 */?>

<style>
.allplanned {
    background-color: #999;
    color: #ffffff;
}

.allrequested {
    background-color: #f89406;
    color: #ffffff;
}

.allaccepted {
    background-color: #468847;
    color: #ffffff;
}

.allrejected {
    background-color: #ff0000;
    color: #ffffff;
}

.working {
    background-color: #ffffff;
    color: #0;
}

.dayoff {
    background-color: #000000;
    color: #ffffff;
}

/*Day off*/

.amdayoff {
background: #000000; /* Old browsers */
background: -moz-linear-gradient(-45deg, #000000 50%, #ffffff 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#000000), color-stop(50%,#ffffff)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #000000 50%,#ffffff 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #000000 50%,#ffffff 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #000000 50%,#ffffff 50%); /* IE10+ */
background: linear-gradient(135deg, #000000 50%,#ffffff 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.pmdayoff {
background: #000000; /* Old browsers */
background: -moz-linear-gradient(-45deg, #ffffff 50%, #000000 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#ffffff), color-stop(50%,#000000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #ffffff 50%,#000000 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #ffffff 50%,#000000 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #ffffff 50%,#000000 50%); /* IE10+ */
background: linear-gradient(135deg, #ffffff 50%,#000000 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

/*Day off and leave*/
.planneddayoff {
background: #999; /* Old browsers */
background: -moz-linear-gradient(-45deg, #999 50%, #000000 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#999), color-stop(50%,#000000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #999 50%,#000000 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #999 50%,#000000 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #999 50%,#000000 50%); /* IE10+ */
background: linear-gradient(135deg, #999 50%,#000000 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#999', endColorstr='#000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.requesteddayoff {
background: #f89406; /* Old browsers */
background: -moz-linear-gradient(-45deg, #f89406 50%, #000000 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#f89406), color-stop(50%,#000000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #f89406 50%,#000000 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #f89406 50%,#000000 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #f89406 50%,#000000 50%); /* IE10+ */
background: linear-gradient(135deg, #f89406 50%,#000000 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f89406', endColorstr='#000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.accepteddayoff {
background: #468847; /* Old browsers */
background: -moz-linear-gradient(-45deg, #468847 50%, #000000 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#468847), color-stop(50%,#000000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #468847 50%,#000000 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #468847 50%,#000000 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #468847 50%,#000000 50%); /* IE10+ */
background: linear-gradient(135deg, #468847 50%,#000000 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#468847', endColorstr='#000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.rejecteddayoff {
background: #ff0000; /* Old browsers */
background: -moz-linear-gradient(-45deg, #ff0000 50%, #000000 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#ff0000), color-stop(50%,#000000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #ff0000 50%,#000000 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #ff0000 50%,#000000 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #ff0000 50%,#000000 50%); /* IE10+ */
background: linear-gradient(135deg, #ff0000 50%,#000000 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff0000', endColorstr='#000000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.dayoffplanned {
background: #999; /* Old browsers */
background: -moz-linear-gradient(-45deg, #000000 50%, #999 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#000000), color-stop(50%,#999)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #000000 50%,#999 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #000000 50%,#999 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #000000 50%,#999 50%); /* IE10+ */
background: linear-gradient(135deg, #000000 50%,#999 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#999',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.dayoffrequested {
background: #f89406; /* Old browsers */
background: -moz-linear-gradient(-45deg, #000000 50%, #f89406 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#000000), color-stop(50%,#f89406)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #000000 50%,#f89406 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #000000 50%,#f89406 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #000000 50%,#f89406 50%); /* IE10+ */
background: linear-gradient(135deg, #000000 50%,#f89406 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#f89406',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.dayoffaccepted {
background: #468847; /* Old browsers */
background: -moz-linear-gradient(-45deg, #000000 50%, #468847 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#000000), color-stop(50%,#468847)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #000000 50%,#468847 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #000000 50%,#468847 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #000000 50%,#468847 50%); /* IE10+ */
background: linear-gradient(135deg, #000000 50%,#468847 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#468847',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.dayoffrejected {
background: #ff0000; /* Old browsers */
background: -moz-linear-gradient(-45deg, #000000 50%, #ff0000 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#000000), color-stop(50%,#ff0000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #000000 50%,#ff0000 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #000000 50%,#ff0000 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #000000 50%,#ff0000 50%); /* IE10+ */
background: linear-gradient(135deg, #000000 50%,#ff0000 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#ff0000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

/*Single day*/

.amplanned {
background: #999; /* Old browsers */
background: -moz-linear-gradient(-45deg, #999 50%, #ffffff 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#999), color-stop(50%,#ffffff)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #999 50%,#ffffff 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #999 50%,#ffffff 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #999 50%,#ffffff 50%); /* IE10+ */
background: linear-gradient(135deg, #999 50%,#ffffff 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#999', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.amrequested {
background: #f89406; /* Old browsers */
background: -moz-linear-gradient(-45deg, #f89406 50%, #ffffff 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#f89406), color-stop(50%,#ffffff)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #f89406 50%,#ffffff 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #f89406 50%,#ffffff 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #f89406 50%,#ffffff 50%); /* IE10+ */
background: linear-gradient(135deg, #f89406 50%,#ffffff 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f89406', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.amaccepted {
background: #468847; /* Old browsers */
background: -moz-linear-gradient(-45deg, #468847 50%, #ffffff 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#468847), color-stop(50%,#ffffff)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #468847 50%,#ffffff 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #468847 50%,#ffffff 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #468847 50%,#ffffff 50%); /* IE10+ */
background: linear-gradient(135deg, #468847 50%,#ffffff 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#468847', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.amrejected {
background: #ff0000; /* Old browsers */
background: -moz-linear-gradient(-45deg, #ff0000 50%, #ffffff 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#ff0000), color-stop(50%,#ffffff)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #ff0000 50%,#ffffff 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #ff0000 50%,#ffffff 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #ff0000 50%,#ffffff 50%); /* IE10+ */
background: linear-gradient(135deg, #ff0000 50%,#ffffff 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff0000', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.pmplanned {
background: #999; /* Old browsers */
background: -moz-linear-gradient(-45deg, #ffffff 50%, #999 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#ffffff), color-stop(50%,#999)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #ffffff 50%,#999 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #ffffff 50%,#999 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #ffffff 50%,#999 50%); /* IE10+ */
background: linear-gradient(135deg, #ffffff 50%,#999 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#999',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.pmrequested {
background: #f89406; /* Old browsers */
background: -moz-linear-gradient(-45deg, #ffffff 50%, #f89406 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#ffffff), color-stop(50%,#f89406)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #ffffff 50%,#f89406 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #ffffff 50%,#f89406 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #ffffff 50%,#f89406 50%); /* IE10+ */
background: linear-gradient(135deg, #ffffff 50%,#f89406 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f89406',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.pmaccepted {
background: #468847; /* Old browsers */
background: -moz-linear-gradient(-45deg, #ffffff 50%, #468847 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#ffffff), color-stop(50%,#468847)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #ffffff 50%,#468847 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #ffffff 50%,#468847 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #ffffff 50%,#468847 50%); /* IE10+ */
background: linear-gradient(135deg, #ffffff 50%,#468847 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#468847',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.pmrejected {
background: #ff0000; /* Old browsers */
background: -moz-linear-gradient(-45deg, #ffffff 50%, #ff0000 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#ffffff), color-stop(50%,#ff0000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #ffffff 50%,#ff0000 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #ffffff 50%,#ff0000 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #ffffff 50%,#ff0000 50%); /* IE10+ */
background: linear-gradient(135deg, #ffffff 50%,#ff0000 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ff0000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

/*Overlapping*/
.plannedrequested {
background: #999; /* Old browsers */
background: -moz-linear-gradient(-45deg, #999 50%, #f89406 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#999), color-stop(50%,#f89406)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #999 50%,#f89406 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #999 50%,#f89406 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #999 50%,#f89406 50%); /* IE10+ */
background: linear-gradient(135deg, #999 50%,#f89406 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#999', endColorstr='#f89406',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.plannedaccepted {
background: #999; /* Old browsers */
background: -moz-linear-gradient(-45deg, #999 50%, #468847 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#999), color-stop(50%,#468847)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #999 50%,#468847 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #999 50%,#468847 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #999 50%,#468847 50%); /* IE10+ */
background: linear-gradient(135deg, #999 50%,#468847 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#999', endColorstr='#468847',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.plannedrejected {
background: #999; /* Old browsers */
background: -moz-linear-gradient(-45deg, #999 50%, #ff0000 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#999), color-stop(50%,#ff0000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #999 50%,#ff0000 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #999 50%,#ff0000 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #999 50%,#ff0000 50%); /* IE10+ */
background: linear-gradient(135deg, #999 50%,#ff0000 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#999', endColorstr='#ff0000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.requestedplanned {
background: #f89406; /* Old browsers */
background: -moz-linear-gradient(-45deg, #f89406 50%, #999 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#f89406), color-stop(50%,#999)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #f89406 50%,#999 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #f89406 50%,#999 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #f89406 50%,#999 50%); /* IE10+ */
background: linear-gradient(135deg, #f89406 50%,#999 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f89406', endColorstr='#999',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.requestedaccepted {
background: #f89406; /* Old browsers */
background: -moz-linear-gradient(-45deg, #f89406 50%, #468847 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#f89406), color-stop(50%,#468847)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #f89406 50%,#468847 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #f89406 50%,#468847 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #f89406 50%,#468847 50%); /* IE10+ */
background: linear-gradient(135deg, #f89406 50%,#468847 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f89406', endColorstr='#468847',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.requestedrejected {
background: #f89406; /* Old browsers */
background: -moz-linear-gradient(-45deg, #f89406 50%, #ff0000 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#f89406), color-stop(50%,#ff0000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #f89406 50%,#ff0000 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #f89406 50%,#ff0000 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #f89406 50%,#ff0000 50%); /* IE10+ */
background: linear-gradient(135deg, #f89406 50%,#ff0000 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f89406', endColorstr='#ff0000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.acceptedplanned {
background: #468847; /* Old browsers */
background: -moz-linear-gradient(-45deg, #468847 50%, #999 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#468847), color-stop(50%,#999)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #468847 50%,#999 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #468847 50%,#999 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #468847 50%,#999 50%); /* IE10+ */
background: linear-gradient(135deg, #468847 50%,#999 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#468847', endColorstr='#999',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.acceptedrequested {
background: #468847; /* Old browsers */
background: -moz-linear-gradient(-45deg, #468847 50%, #f89406 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#468847), color-stop(50%,#f89406)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #468847 50%,#f89406 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #468847 50%,#f89406 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #468847 50%,#f89406 50%); /* IE10+ */
background: linear-gradient(135deg, #468847 50%,#f89406 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#468847', endColorstr='#f89406',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.acceptedrejected {
background: #468847; /* Old browsers */
background: -moz-linear-gradient(-45deg, #468847 50%, #ff0000 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#468847), color-stop(50%,#ff0000)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #468847 50%,#ff0000 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #468847 50%,#ff0000 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #468847 50%,#ff0000 50%); /* IE10+ */
background: linear-gradient(135deg, #468847 50%,#ff0000 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#468847', endColorstr='#ff0000',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.rejectedplanned {
background: #ff0000; /* Old browsers */
background: -moz-linear-gradient(-45deg, #ff0000 50%, #999 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#ff0000), color-stop(50%,#999)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #ff0000 50%,#999 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #ff0000 50%,#999 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #ff0000 50%,#999 50%); /* IE10+ */
background: linear-gradient(135deg, #ff0000 50%,#999 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff0000', endColorstr='#999',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.rejectedrequested {
background: #ff0000; /* Old browsers */
background: -moz-linear-gradient(-45deg, #ff0000 50%, #f89406 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#ff0000), color-stop(50%,#f89406)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #ff0000 50%,#f89406 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #ff0000 50%,#f89406 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #ff0000 50%,#f89406 50%); /* IE10+ */
background: linear-gradient(135deg, #ff0000 50%,#f89406 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff0000', endColorstr='#f89406',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

.rejectedaccepted {
background: #ff0000; /* Old browsers */
background: -moz-linear-gradient(-45deg, #ff0000 50%, #468847 50%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#ff0000), color-stop(50%,#468847)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg, #ff0000 50%,#468847 50%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg, #ff0000 50%,#468847 50%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg, #ff0000 50%,#468847 50%); /* IE10+ */
background: linear-gradient(135deg, #ff0000 50%,#468847 50%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff0000', endColorstr='#468847',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}

</style>
