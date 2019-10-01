<div class="modal" id="CalcModal" tabindex="-2" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
				<form action="#" name="calculator">
					<a class="close" data-dismiss="modal"><i class="fa fa-times"></i></a>
					<div class="modal_title">Калькулятор</div>
					<div class="columns">
						<div class="column_half rows bordered select_block">
							<div>
								<label>Толщина</label>
								<select name="tolshina">
									<option value="0">выберите</option>
								</select>
							</div>
                            <div>
                                <label>Размер</label>
                                <select name="razmer">
                                    <option value="0">выберите</option>
                                </select>
                            </div>
							<div>
								<label>Сорт</label>
								<select name="sort">
									<option value="0">выберите</option>
								</select>
							</div>
							<div>
								<label>Тип</label>
                                <select name="tip-fanery">
                                    <option value="0">выберите</option>
                                </select>
                                <!--
								<select name="svojstva">
									<option value="0">выберите</option>
								</select>
								-->
							</div>
                            <div class="product_info">
                                <div class="product-name"><strong>Название товара:</strong> <span></span></div>
                                <div class="product-one-price"><strong>Цена за 1ед.:</strong> <span></span><span class="price"></span></div>
                                <div class="product-qty-to-order"><strong>Количество листов:</strong> <span></span></div>
                                <div class="product-price-to-order"><strong>Сумма:</strong> <span></span></div>
                                <input type="hidden" id="hidden-qty-to-order" value="1.000">
                            </div>
						</div>

						<div class="column_half rows">
							<div class="bordered calc_right_panel">
								<div class="columns f_space_around">
									<div class="columns">
										<input id="green_ply_radio1" type="radio" name="calc_type" value="1" class="green_ply_radio">
										<label for="green_ply_radio1" class="green_ply_radio"> м<sup>2</sup></label>
									</div>
									<div>
										<input id="green_ply_radio2" type="radio" name="calc_type" value="2" class="green_ply_radio">
										<label for="green_ply_radio2"  class="green_ply_radio"> м<sup>3</sup></label>
									</div>
									<div>
										<input id="green_ply_radio3" type="radio" name="calc_type" value="3" checked="checked" class="green_ply_radio">
										<label for="green_ply_radio3"  class="green_ply_radio"> листов</label>
									</div>
								</div>
								<div class="columns f_space_between">
                                    <div class="column_half"><span><strong>Величина</strong></span></div>
									<div class="column_half">
										<input name="quantity" type="text" value="1">
									</div>
								</div>
								<div class="columns f_center">
									<a href="#" class="btn calculator_calc_btn">Рассчитать</a>
								</div>
							</div>
							<div class="bordered text_left">
                                <span><strong>1 m<sup><small>2</small></sup> это:</strong> </span>
									<p>0.010 m<sup><small>3</small></sup></p>
									<p>0.000 листов </p>
									<p>1.000 листов к заказу</p>
							</div>
						</div>
					</div>

                    <div class="columns f_center bordered calculator_buy_btn_container" style="display: none;">
                        <div class="column_half">
                            <a href="#" class="btn calculator_buy_btn">Заказать</a>
                        </div>
                    </div>
<!--
					<div class="rows bordered">
						<div class="product-name">Название товара: <span>ФСФ фанера береза толщиной 10мм размером 2440х1220, сорт 2/4</span></div>
						<div class="product-one-price">Цена за 1ед.: <span></span><span class="price">1&nbsp;258&nbsp;руб.</span></div>
						<div class="product-qty-to-order">Количество листов: <span>1</span></div>
						<div class="product-price-to-order">Сумма: <span>1258 руб.</span></div>
						<input type="hidden" id="hidden-qty-to-order" value="1.000">
					</div>
-->
				</form>
            </div>
        </div>
    </div>
</div>