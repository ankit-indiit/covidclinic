<?php

namespace App\DataTables;
use Illuminate\Http\Request;
use App\Models\PatientReport;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Auth;

class PatientReportDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)->addIndexColumn()
            ->setRowClass(function ($patientReport) {
                    return '';
            })

            ->addColumn('id', static function (PatientReport $patientReport) {
                return $patientReport->id;
            })

            ->addColumn('title', static function (PatientReport $patientReport) {
                return $patientReport->title;
            })->filterColumn('title', function($query, $keyword) {
                $sql = "patient_reports.title like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })

            ->addColumn('specimen_type', static function (PatientReport $patientReport) {
                return $patientReport->specimen_type;
            })

            ->addColumn('date', static function (PatientReport $patientReport) {
                return $patientReport->created_at;
            })

            ->addColumn('status', static function (PatientReport $patientReport) {
                return $patientReport->status;
            })                     

            ->addColumn('action', static function (PatientReport $patientReport) {
                $reportId = \Crypt::encrypt($patientReport->id);             
                return view('frontend.clinic.action.patient-report', compact('reportId'));
            })                 
           
            ->setRowId(function ($patientReport) {
                return 'user-'.$patientReport->id;
            })
            ->rawColumns(['action','image']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PatientReport $patientReport, Request $request)
    {
        if (Auth::user()->role == 'clinic') {
            return PatientReport::filter($this->filter)->where('patient_id', $this->patientId)->orderBy('id', 'DESC')->newQuery();
        } else {
            return PatientReport::filter($this->filter)->where('patient_id', Auth::user()->id)->orderBy('id', 'DESC')->newQuery();
        }
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('users-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addTableClass(['table-hover', 'table-bordered', 'table-sm'])
            ->parameters([
                'lengthMenu' => [
                    [ 25, 50, 100, 500],
                    [ '25', '50', '100', '500']
                ],
                // 'dom' => 'Blfrtip',
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            // Column::make('checkbox')->title(''),
            Column::make('DT_RowIndex')->title('Sr. no.')->searchable(false)->orderable(false),
            Column::make('title'),        
            Column::make('specimen_type'),    
            Column::make('date'),    
            Column::make('status'),    
            Column::make('action'),    
        ];
    }
}
