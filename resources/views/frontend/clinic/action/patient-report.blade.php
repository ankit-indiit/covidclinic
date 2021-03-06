<a href="{{ route('report-detail', $reportId) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="btn-darkblue btn-action" data-bs-original-title="View Report" aria-label="View Report"><i class="fa fa-eye"></i></a>
@if (Auth::user()->role == 'clinic')
	<a href="{{ route('edit-patient-report', $reportId) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="btn-primary btn-action" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-edit"></i></a>
@endif
@if (Auth::user()->role == 'patient')
	<a href="javascript:void(0);" id="{{ getIncorrectReportStatus($reportId) ? 'reportedIncorrect' : 'reportIncorrect' }}" data-id="{{ getIncorrectReportStatus($reportId) ? getIncorrectReportStatus($reportId) : $reportId }}"  data-bs-toggle="tooltip" data-bs-placement="top" title="" class="btn-primary btn-action" data-bs-original-title="Report Incorrect Results" aria-label="Report Incorrect Results"><i class="fa fa-flag"></i></a>
@endif
<a href="{{ route('download-pdf', $reportId) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="btn-success btn-action" data-bs-original-title="Download Report" aria-label="Download Report"><i class="fas fa-download"></i></a>