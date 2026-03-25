<?php if ($schedule = $args['fields']['schedule']): ?>
  <div class="schedule-block">
    <?php if ($caption = $args['fields']['caption']): ?>
      <div class="schedule-block__caption">
        <?php echo $caption; ?>
      </div>
    <?php endif; ?>
    <div class="schedule-table">
      <div class="schedule-table__column schedule-table__column--time">
        <div class="schedule-table__th">

        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="schedule-table__td">
            <strong><?php echo nl2br($item['time']); ?></strong>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="schedule-table__column">
        <div class="schedule-table__th">
          <div>Понедельник</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="schedule-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['monday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="schedule-table__column">
        <div class="schedule-table__th">
          <div>Вторник</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="schedule-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['tuesday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="schedule-table__column">
        <div class="schedule-table__th">
          <div>Среда</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="schedule-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['wednesday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="schedule-table__column">
        <div class="schedule-table__th">
          <div>Четверг</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="schedule-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['thursday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="schedule-table__column">
        <div class="schedule-table__th">
          <div>Пятница</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="schedule-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['friday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="schedule-table__column">
        <div class="schedule-table__th">
          <div>Суббота</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="schedule-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['saturday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="schedule-block__order">
      <button type="button" class="btn-primary" data-callback-button>Записаться на&nbsp;занятие</button>
    </div>
  </div>
<?php endif; ?>