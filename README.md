A value-object is a value wrapped inside a class, which does some validation logic (eg., mail address having a valid format).

Value-objects can only identified from their type and value they wrap, which means two instances of the same data may be equal, even if both objects have different references.