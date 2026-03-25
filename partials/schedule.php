<?php if ($schedule = $args['fields']['schedule']): ?>
  <div class="schedule-block">
    <?php if ($caption = $args['fields']['caption']): ?>
      <div class="schedule-block__caption">
        <?php echo $caption; ?>
      </div>
    <?php endif; ?>
    <div class="schedule-table">
      <div class="schedule-header">
        <div class="schedule-header__cell">
          <div></div>
        </div>
        <div class="schedule-header__cell">
          <div>Понедельник</div>
        </div>
        <div class="schedule-header__cell">
          <div>Вторник</div>
        </div>
        <div class="schedule-header__cell">
          <div>Среда</div>
        </div>
        <div class="schedule-header__cell">
          <div>Четверг</div>
        </div>
        <div class="schedule-header__cell">
          <div>Пятница</div>
        </div>
        <div class="schedule-header__cell">
          <div>Суббота</div>
        </div>
      </div>
      <div class="schedule-body">
        <?php foreach ($schedule as $item): ?>
          <div class="schedule-row">
            <div class="schedule-row__time">
              <div><?php echo nl2br($item['time']); ?></div>
            </div>
            <div class="schedule-row__cell" data-title="Понедельник">
              <div><?php echo nl2br($item['monday']); ?></div>
            </div>
            <div class="schedule-row__cell" data-title="Вторник">
              <div><?php echo nl2br($item['tuesday']); ?></div>
            </div>
            <div class="schedule-row__cell" data-title="Среда">
              <div><?php echo nl2br($item['wednesday']); ?></div>
            </div>
            <div class="schedule-row__cell" data-title="Четверг">
              <div><?php echo nl2br($item['thursday']); ?></div>
            </div>
            <div class="schedule-row__cell" data-title="Пятница">
              <div><?php echo nl2br($item['friday']); ?></div>
            </div>
            <div class="schedule-row__cell" data-title="Суббота">
              <div><?php echo nl2br($item['saturday']); ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="elidehcs-table">
      <div class="elidehcs-table__column elidehcs-table__column--time">
        <div class="elidehcs-table__th">

        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="elidehcs-table__td">
            <strong><?php echo nl2br($item['time']); ?></strong>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="elidehcs-table__column">
        <div class="elidehcs-table__th">
          <div>Понедельник</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="elidehcs-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['monday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="elidehcs-table__column">
        <div class="elidehcs-table__th">
          <div>Вторник</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="elidehcs-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['tuesday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="elidehcs-table__column">
        <div class="elidehcs-table__th">
          <div>Среда</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="elidehcs-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['wednesday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="elidehcs-table__column">
        <div class="elidehcs-table__th">
          <div>Четверг</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="elidehcs-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['thursday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="elidehcs-table__column">
        <div class="elidehcs-table__th">
          <div>Пятница</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="elidehcs-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
            <div><?php echo nl2br($item['friday']); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="elidehcs-table__column">
        <div class="elidehcs-table__th">
          <div>Суббота</div>
        </div>
        <?php foreach ($schedule as $item): ?>
          <div class="elidehcs-table__td" data-time="<?php echo esc_attr($item['time']); ?>">
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