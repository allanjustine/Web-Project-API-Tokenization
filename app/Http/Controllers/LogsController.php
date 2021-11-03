<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLogsRequest;
use App\Http\Requests\UpdateLogsRequest;
use App\Repositories\LogsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LogsController extends AppBaseController
{
    /** @var  LogsRepository */
    private $logsRepository;

    public function __construct(LogsRepository $logsRepo)
    {
        $this->logsRepository = $logsRepo;
    }

    /**
     * Display a listing of the Logs.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $logs = $this->logsRepository->all();

        return view('logs.index')
            ->with('logs', $logs);
    }

    /**
     * Show the form for creating a new Logs.
     *
     * @return Response
     */
    public function create()
    {
        return view('logs.create');
    }

    /**
     * Store a newly created Logs in storage.
     *
     * @param CreateLogsRequest $request
     *
     * @return Response
     */
    public function store(CreateLogsRequest $request)
    {
        $input = $request->all();

        $logs = $this->logsRepository->create($input);

        Flash::success('Logs saved successfully.');

        return redirect(route('logs.index'));
    }

    /**
     * Display the specified Logs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $logs = $this->logsRepository->find($id);

        if (empty($logs)) {
            Flash::error('Logs not found');

            return redirect(route('logs.index'));
        }

        return view('logs.show')->with('logs', $logs);
    }

    /**
     * Show the form for editing the specified Logs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $logs = $this->logsRepository->find($id);

        if (empty($logs)) {
            Flash::error('Logs not found');

            return redirect(route('logs.index'));
        }

        return view('logs.edit')->with('logs', $logs);
    }

    /**
     * Update the specified Logs in storage.
     *
     * @param int $id
     * @param UpdateLogsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLogsRequest $request)
    {
        $logs = $this->logsRepository->find($id);

        if (empty($logs)) {
            Flash::error('Logs not found');

            return redirect(route('logs.index'));
        }

        $logs = $this->logsRepository->update($request->all(), $id);

        Flash::success('Logs updated successfully.');

        return redirect(route('logs.index'));
    }

    /**
     * Remove the specified Logs from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $logs = $this->logsRepository->find($id);

        if (empty($logs)) {
            Flash::error('Logs not found');

            return redirect(route('logs.index'));
        }

        $this->logsRepository->delete($id);

        Flash::success('Logs deleted successfully.');

        return redirect(route('logs.index'));
    }
}
