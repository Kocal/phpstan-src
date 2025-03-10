<?php

namespace ClassAncestorsExtends;

/**
 * @template T
 * @template U of \Exception
 */
class FooGeneric
{

}

/**
 * @template T
 * @template V of \Exception
 */
class FooGeneric2
{

}

/**
 * @extends FooGeneric<int, \InvalidArgumentException>
 */
class FooDoesNotExtendAnything
{

}

/**
 * @extends FooGeneric<int, \InvalidArgumentException>
 * @extends FooGeneric2<int, \InvalidArgumentException>
 */
class FooDuplicateExtendsTags extends FooGeneric
{

}

/**
 * @extends FooGeneric2<int, \InvalidArgumentException>
 */
class FooWrongClassExtended extends FooGeneric
{

}

/**
 * @extends class-string<T>
 */
class FooWrongTypeInExtendsTag extends FooGeneric
{

}

/**
 * @extends FooGeneric<int, \InvalidArgumentException>
 */
class FooCorrect extends FooGeneric
{

}

/**
 * @extends FooGeneric<int>
 */
class FooNotEnough extends FooGeneric
{

}

/**
 * @extends FooGeneric<int, \InvalidArgumentException, string>
 */
class FooExtraTypes extends FooGeneric
{

}

/**
 * @extends FooGeneric<int, \Throwable>
 */
class FooNotSubtype extends FooGeneric
{

}

/**
 * @extends FooGeneric<int, \stdClass>
 */
class FooAlsoNotSubtype extends FooGeneric
{

}

/**
 * @extends FooGeneric<Zazzuuuu, \Exception>
 */
class FooUnknownClass extends FooGeneric
{

}

/**
 * @template T
 * @extends FooGeneric<int, T>
 */
class FooGenericGeneric extends FooGeneric
{

}

/**
 * @template T of \Throwable
 * @extends FooGeneric<int, T>
 */
class FooGenericGeneric2 extends FooGeneric
{

}


/**
 * @template T of \Exception
 * @extends FooGeneric<int, T>
 */
class FooGenericGeneric3 extends FooGeneric
{

}

/**
 * @template T of \InvalidArgumentException
 * @extends FooGeneric<int, T>
 */
class FooGenericGeneric4 extends FooGeneric
{

}

/**
 * @template T
 * @extends FooGeneric<T, \Exception>
 */
class FooGenericGeneric5 extends FooGeneric
{

}

/**
 * @template T of \stdClass
 * @extends FooGeneric<T, \Exception>
 */
class FooGenericGeneric6 extends FooGeneric
{

}

/**
 * @template T of \stdClass
 * @extends FooGeneric<int, T>
 */
class FooGenericGeneric7 extends FooGeneric
{

}

class FooExtendsNonGenericClass extends FooDoesNotExtendAnything
{

}


class FooExtendsGenericClass extends FooGeneric
{

}

/**
 * @template-covariant T
 * @template U
 */
class FooGeneric8
{

}

/**
 * @template-covariant T
 * @extends FooGeneric8<T, T>
 */
class FooGeneric9 extends FooGeneric8
{

}

/**
 * @template-contravariant T
 * @extends FooGeneric8<T, T>
 */
class FooGeneric10 extends FooGeneric8
{

}

/**
 * @template T
 * @extends FooGeneric8<T, T>
 */
class FooGeneric11 extends FooGeneric8
{

}

class FilterIteratorChild extends \FilterIterator
{

	public function accept()
	{
		return true;
	}

}
