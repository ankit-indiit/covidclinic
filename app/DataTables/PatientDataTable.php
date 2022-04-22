<?php

namespace App\DataTables;
use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Auth;

class PatientDataTable extends DataTable
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
            ->setRowClass(function ($user) {
                    return '';
            })

            ->addColumn('id', static function (User $user) {
                return $user->id;
            })

            ->addColumn('name', static function (User $user) {                
                return $user->first_name.' '.$user->last_name;
            })->filterColumn('name', function($query, $keyword) {
                $sql = "CONCAT(users.first_name,'-',users.last_name)  like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })

            ->addColumn('email', static function (User $user) {
                return $user->email;
            })->filterColumn('email', function($query, $keyword) {
                $sql = "users.email like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })

            ->addColumn('phone_number', static function (User $user) {
                return $user->phone_number;
            })

            ->addColumn('dob', static function (User $user) {
                return $user->dob;
            })

            ->addColumn('gender', static function (User $user) {
                return $user->gender;
            })

            ->addColumn('address', static function (User $user) {
                return $user->address1;
            })

            ->addColumn('mrn', static function (User $user) {
                return $user->mrn;
            })

            ->addColumn('facility', static function (User $user) {
                return getClinicFacilityById($user->clinic_id);
            })

            ->addColumn('date', static function (User $user) {
                return $user->created_at;
            })

            ->addColumn('status', static function (User $user) {
                return $user->payment_status;
            })

            ->addColumn('action', static function (User $user) {
                $patientId = \Crypt::encrypt($user->id);  
                return '
                    <a href="'.route('edit-patient', $patientId).'" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="btn-primary btn-action" data-bs-original-title="Edit" aria-label="Edit"><i class="fa fa-edit"></i></a>
                    <a href="'.route('patient-reports', $patientId).'" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="btn-success btn-action" data-bs-original-title="Reports" aria-label="Reports"><i class="fa fa-file-alt"></i></a>
                ';
            })                 
           
            ->setRowId(function ($user) {
                return 'user-'.$user->id;
            })
            ->rawColumns(['action','image']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $user)
    {
        return User::where('clinic_id', Auth::user()->id)->orderBy('id', 'DESC')->newQuery();
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
            Column::make('id')->title('Patient ID'),
            Column::make('name'),        
            Column::make('email'),    
            Column::make('phone_number'),    
            Column::make('dob'),    
            Column::make('gender'),    
            Column::make('address'),    
            Column::make('mrn'),    
            Column::make('facility'),    
            Column::make('date'),    
            Column::make('status'),    
            Column::make('action'),    
        ];
    }
}
