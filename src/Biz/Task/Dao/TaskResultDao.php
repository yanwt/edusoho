<?php

namespace Biz\Task\Dao;

use Codeages\Biz\Framework\Dao\GeneralDaoInterface;

interface TaskResultDao extends GeneralDaoInterface
{
    public function findByCourseIdAndUserId($courseId, $userId);

    public function findByActivityIdAndUserId($activityId, $userId);

    public function getByTaskIdAndUserId($taskId, $userId);
}